<?php
namespace app\controllers;

use lithium\storage\Session;
use lithium\security\Auth;
use lithium\util\String;
use app\extensions\action\Functions;
use app\models\Users;
use app\models\Details;
use app\models\Templates;
use app\models\Pages;

class AdminController extends \lithium\action\Controller {
	
	public function index(){
	if($this->__init()==false){$this->redirect('Admin::signin');	}
	$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
		
	}

	public function __init(){
		$user = Session::read('member');
		
		$id = $user['_id'];
		$details = Details::find('first',
			array('conditions'=>array('user_id'=>$id))
		);
		if(strtolower(str_replace("@","",strstr($user['email'],"@")))==strtolower(COMPANY_URL) 
			&& $details['email.verified']=="Yes"
			&&	( 
						strtolower(MAIL_1)==strtolower($user['email'])
			|| strtolower(MAIL_2)==strtolower($user['email'])
			|| strtolower(MAIL_3)==strtolower($user['email']) 	
			|| strtolower(MAIL_4)==strtolower($user['email'])
						)
		){
			return true;
		}else{
			return false;
		}
	}

	public function signin(){
   //assume there's no problem with authentication
			$noauth = false;
			//perform the authentication check and redirect on success
			
			Session::delete('default');				
			$response = file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}");
			$IPResponse = json_decode($response);
			if($IPResponse->tor) {
		    // Display error message or something
					Auth::clear('member');
					Session::delete('default');
					return false;
			}
			
			if (Auth::check('member', $this->request)){
				
				//Redirect on successful login
				$loginpassword = $this->request->data['loginpassword'];
				$default = Auth::check('member', $this->request);
				
				$details = Details::find('first',array(
					'conditions' => array(
						'username'=>$default['username'],
						'user_id'=>(string)$default['_id']
						)
				));
				if($details['active']=="No"){
					Auth::clear('member');
					Session::delete('default');
					return $this->redirect('/');
					exit;
				}
					
				if($details['oneCode']===$this->request->data['loginpassword']){
					$data = array(
						'oneCodeused'=>'Yes',
						'lastconnected'=>array(									
									'IP' => $IPResponse->ip,
									'ISO'=> $IPResponse->country,
									'hostname'=> $IPResponse->hostname,
									'city'=> $IPResponse->city,
									'region'=> $IPResponse->region,									
									'loc'=> $IPResponse->loc,
									'org'=> $IPResponse->org,									
									'postal'=> $IPResponse->postal,									
									'DateTime' => new \MongoDate(),
								)
					);
					$details = Details::find('first',array(
						'conditions' => array(
							'username'=>$default['username'],
							'user_id'=>(string)$default['_id']
							)
					))->save($data);
					$details = Details::find('first',array(
						'conditions' => array(
							'username'=>$default['username'],
							'user_id'=>(string)$default['_id']
							)
					));
					
				}else{
					Auth::clear('member');
					Session::delete('default');
				}
			}
			//if theres still post data, and we weren't redirected above, then login failed

			if ($this->request->data){
				//Login failed, trigger the error message
				if(isset($this->request->query['check']) && $this->request->query['check']==SECURITY_CHECK){$check = $this->request->query['check'];}
				$noauth = true;
			}
			//Return noauth status

		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));


		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
			return compact('noauth','title','keywords','description');
			return $this->redirect('/');
			exit;

		
	}
	
	public function template(){
		if($this->request->data){
			$ISO = $this->request->data['ISO'];
			print_r($ISO);
			$Country = Templates::find('first',array(
				'conditions'=>array('ISO'=>$ISO)
			));
			$Allow = $Country['Allow'];
			
		}
		
		$templates = Templates::find('all',array(
			'order'=>array('country'=>1)
		));
		
		return compact('templates','Country','Allow');
	}
}
?>