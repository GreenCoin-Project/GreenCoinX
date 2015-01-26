<?php
namespace app\controllers;
	use app\models\Wallets;  
	use app\models\Countries;  
	use app\models\Inquries;  
	use MongoID;	
	use lithium\util\String;
	use lithium\data\Connections;
	use app\extensions\action\Functions;
	
class GreencoinController extends \lithium\action\Controller {
	public function index(){
				$opts = array(
			  'http'=> array(
					'method'=> "GET",
					'user_agent'=> "MozillaXYZ/1.0"));
			$context = stream_context_create($opts);
			$function = new Functions();
			$json = file_get_contents('http://hitarth.org/search/users', false, $context);
			$jdec = (array)json_decode($json);			
			$users = $function->objectToArray($jdec);
			return compact('users');	
	}
	public function download(){
		$opts = array(
			  'http'=> array(
					'method'=> "GET",
					'user_agent'=> "MozillaXYZ/1.0"));
			$context = stream_context_create($opts);
			$function = new Functions();
			$json = file_get_contents('http://hitarth.org/search/users', false, $context);
			$jdec = (array)json_decode($json);			
			$users = $function->objectToArray($jdec);
			return compact('users');	
	}
	public function contact(){}
	public function aboutus(){}
	public function risk(){}
	public function privacy(){}
	public function terms(){}
	public function how(){}
	public function sendtoemail(){}
	public function sendtophone(){}
	public function newaddress(){}
	public function paytaxes(){}
	public function install(){}
	public function FAQ(){}
	public function inquiry(){}
	public function government(){
		if($this->request->data){
			$data = array(
				'data'=>$this->request->data,
				'DateTime'=>new \MongoDate(),
				'IP'=>$_SERVER['REMOTE_ADDR'],
			);
			$inquries = Inquries::create($data)->save();
			// sending email to the users 
			/////////////////////////////////Email//////////////////////////////////////////////////
				$function = new Functions();
				$compact = array('user'=>$data);
				// sendEmailTo($email,$compact,$controller,$template,$subject,$from,$mail1,$mail2,$mail3)
				$from = array(NOREPLY => "noreply@".COMPANY_URL);
				$email = $this->request->data['email'];
				$attach = null;
				//$function->sendEmailTo($email,$compact,'greencoin','inquiry',"Government Inquiry",$from,MAIL_1,MAIL_2,MAIL_3,$attach);
				$function->sendEmailTo($email,$compact,'greencoin','inquiry',"Government Inquiry",$from,MAIL_1,'','',$attach);
			/////////////////////////////////Email//////////////////////////////////////////////////				
			$this->redirect('greencoin::inquiry');	
		}
		$countries = Countries::find('all',array(
			'order'=>array('Country'=>1)
		));
		return compact('countries');
	}
	
		public function identification(){
			if($this->request->data){
					$search = $this->request->data['search'];
					switch ($search){
						case 'searchEmail':
							$data = Wallets::find('all',array(
								'conditions'=>array(
									'email'=>$this->request->data['email']
								),
								'order'=>array(
									'DateTime'=>-1
								)
							));
							break;
						case 'searchPhone':
						$data = Wallets::find('all',array(
								'conditions'=>array(
									'phone'=>$this->request->data['phone']
								),
								'order'=>array(
									'DateTime'=>-1
								)
							));
							break;
						case 'searchAddress':
						$data = Wallets::find('all',array(
								'conditions'=>array(
									'addresses'=>$this->request->data['address']
								),
								'order'=>array(
									'DateTime'=>-1
								)
							));
							break;
					}
				
			}
			
			return compact('data');
		}
		public function addresses($stringID,$id){
			$show = "No";
			$secret = "NO";
			if($this->request->data){
				$secret = $this->request->data['secret'];
			}
			$data = Wallets::find('first', array(
			'conditions' => array('_id' => new MongoID($id))
			));
			if(String::hash($data['_id'])==$stringID){
				if($secret=="NO"){
					return compact('data');
				}else{
					if($data['secret']==$secret){
						$show = 'Yes';
					}
					return compact('data','show');
				}
				
			}
		}
}
?>