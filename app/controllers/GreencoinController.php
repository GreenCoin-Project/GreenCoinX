<?php
namespace app\controllers;
	use app\models\Wallets;  
	use app\models\Countries;  
	
	use lithium\data\Connections;
	use app\extensions\action\Functions;
	
class GreencoinController extends \lithium\action\Controller {
	
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
	public function government(){
		$countries = Countries::find('all',array(
			'order'=>array('Country'=>1)
		));
		return compact('countries');
		
	}
	
	
}
?>