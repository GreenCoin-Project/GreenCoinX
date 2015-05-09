<?php
namespace app\controllers;
	use app\models\Wallets;  
	use app\models\Countries;  
	use app\models\Inquries;  
	use app\models\Pages;
	use MongoID;	
	use lithium\util\String;
	use lithium\data\Connections;
	use app\extensions\action\Functions;
	
class GreencoinController extends \lithium\action\Controller {
	public function index(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];

				$opts = array(
			  'http'=> array(
					'method'=> "GET",
					'user_agent'=> "MozillaXYZ/1.0"));
			$context = stream_context_create($opts);
			$function = new Functions();
			$json = file_get_contents('http://hitarth.org/search/users', false, $context);
			$jdec = (array)json_decode($json);			
			$users = $function->objectToArray($jdec);
			return compact('users','title','keywords','description');	
	}
	public function download(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		$opts = array(
			  'http'=> array(
					'method'=> "GET",
					'user_agent'=> "MozillaXYZ/1.0"));
			$context = stream_context_create($opts);
			$function = new Functions();
			$json = file_get_contents('http://hitarth.org/search/users', false, $context);
			$jdec = (array)json_decode($json);			
			$users = $function->objectToArray($jdec);
			return compact('users','title','keywords','description');	
	}
	public function contact(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function aboutus(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function risk(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function privacy(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function terms(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function how(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');	
		
	}
	public function sendtoemail(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');	
	}
	public function sendtophone(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function newaddress(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function paytaxes(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function install(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function mine(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	
	public function FAQ(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');	
	}
	public function inquiry(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		return compact('title','keywords','description');			
	}
	public function government(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		
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
				$function->sendEmailTo($email,$compact,'greencoin','inquiry',"Government Inquiry",$from,MAIL_1,MAIL_2,MAIL_3,$attach);
				//$function->sendEmailTo($email,$compact,'greencoin','inquiry',"Government Inquiry",$from,MAIL_1,'','',$attach);
			/////////////////////////////////Email//////////////////////////////////////////////////				
			$this->redirect('greencoin::inquiry');	
		}
		$countries = Countries::find('all',array(
			'order'=>array('Country'=>1)
		));
		return compact('countries','title','keywords','description');
	}
	
		public function identification(){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		
			if($this->request->data){
					$search = $this->request->data['search'];
					$opts = array(
					'http'=> array(
					'method'=> "GET",
					'user_agent'=> "MozillaXYZ/1.0"));
					$context = stream_context_create($opts);
					$function = new Functions();
					switch ($search){
						case 'searchEmail':
							$json = file_get_contents('http://hitarth.org/search/user/email/'.$this->request->data['email'], false, $context);
							break;
						case 'searchPhone':
						$json = file_get_contents('http://hitarth.org/search/user/phone/'.$this->request->data['phone'], false, $context);
						break;
						case 'searchAddress':
						$json = file_get_contents('http://hitarth.org/search/user/address/'.$this->request->data['address'], false, $context);
						break;
					}
				
			}
						
			$jdec = (array)json_decode($json);			
			$function = new Functions();
			$data = $function->objectToArray($jdec);
			
			return compact('data','title','keywords','description');
		}
		public function addresses($stringID,$id){
		$page = Pages::find('first',array(
			'conditions'=>array('pagename'=>$this->request->controller.'/'.$this->request->action)
		));

		$title = $page['title'];
		$keywords = $page['keywords'];
		$description = $page['description'];
		
			$show = "No";
			$secret = "NO";
			if($this->request->data){
				$secret = $this->request->data['secret'];
			}

			$opts = array(
			'http'=> array(
			'method'=> "GET",
			'user_agent'=> "MozillaXYZ/1.0"));
			$context = stream_context_create($opts);
			$function = new Functions();

			$json = file_get_contents('http://hitarth.org/search/user/id/'.$id, false, $context);
			$jdec = (array)json_decode($json);			
			$data = $function->objectToArray($jdec);
			if(String::hash($data['users']->_id)==$stringID){
				if($secret=="NO"){
					return compact('data','title','keywords','description');
				}else{
					if($data['users']->secret==$secret){
						$show = 'Yes';
					}
					return compact('data','show','title','keywords','description');
				}
				
			}
		}
}
?>