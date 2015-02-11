<?php
namespace app\controllers;
use app\models\Users;
use app\models\Details;
use app\extensions\action\GoogleAuthenticator;
use MongoID;

use \lithium\template\View;
use \Swift_MailTransport;
use \Swift_Mailer;
use \Swift_Message;
use \Swift_Attachment;

class UsersController extends \lithium\action\Controller {
	
	public function signup(){
		
		
		
	}
	public function username($username=null){
		$usercount = Users::find('all',array(
			'conditions'=>array('username'=>$username)
		));
		if(count($usercount)==0){
			$Available = 'Yes';
		}else{
			$Available = 'No';
		}
			return $this->render(array('json' => array(
			'Available'=> $Available,
		)));
	}
	public function SendPassword($username=""){
		$users = Users::find('first',array(
					'conditions'=>array('username'=>$username)
				));
		$id = (string)$users['_id'];
		if($id==""){
			return $this->render(array('json' => array("Password"=>"Password Not sent","TOTP"=>"No")));
		}
		
		$ga = new GoogleAuthenticator();
		$secret = $ga->createSecret(64);
		$details = Details::find('first',array(
					'conditions'=>array('username'=>$username,'user_id'=>(string)$id)
		));
		if($details['oneCodeused']=='Yes' || $details['oneCodeused']==""){
			$oneCode = $ga->getCode($secret);	
			$data = array(
				'oneCode' => $oneCode,
				'oneCodeused' => 'No'
			);
			$details = Details::find('all',array(
						'conditions'=>array('username'=>$username,'user_id'=>(string)$id)
			))->save($data);
		}
		$details = Details::find('first',array(
					'conditions'=>array('username'=>$username,'user_id'=>(string)$id)
		));
		$oneCode = $details['oneCode'];
		$totp = "No";

		if($details['TOTP.Validate']==true && $details['TOTP.Login']==true){
			$totp = "Yes";
		}
		
		$view  = new View(array(
			'loader' => 'File',
			'renderer' => 'File',
			'paths' => array(
				'template' => '{:library}/views/{:controller}/{:template}.{:type}.php'
			)
		));
		$email = $users['email'];
			$body = $view->render(
				'template',
				compact('users','oneCode','username'),
				array(
					'controller' => 'users',
					'template'=>'onecode',
					'type' => 'mail',
					'layout' => false
				)
			);

			$transport = Swift_MailTransport::newInstance();
			$mailer = Swift_Mailer::newInstance($transport);
	
			$message = Swift_Message::newInstance();
			$message->setSubject("Sign in password for ".COMPANY_URL);
			$message->setFrom(array(NOREPLY => 'Sign in password from '.COMPANY_URL));
			$message->setTo($email);
			$message->setBody($body,'text/html');
			$mailer->send($message);
			return $this->render(array('json' => array("Password"=>"Password sent to email","TOTP"=>$totp)));
	}
	
}
?>