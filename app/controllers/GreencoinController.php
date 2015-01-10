<?php
namespace app\controllers;
	use app\models\Wallets;  
	use app\models\Countries;  
	
	use lithium\data\Connections;
	use app\extensions\action\Functions;
	
class GreencoinController extends \lithium\action\Controller {
	
	public function download(){
		
		
		$result = Wallets::connection()->selectDB(CONNECTION_DB)->command(array(
			'aggregate' => 'wallets',
			'pipeline' => array( 
				
				array( '$project' => array(
					'_id'=>0,
					'ISDPhone' => '$ISDPhone',
					'oneCodeused'=>'$oneCodeused',
					'twoCodeused'=>'$twoCodeused',
					'secret'=>'$secret',
					'ISDCountry'=>'$IPinfo.country',
				)),
				array('$match'=>array( 
					'oneCodeused'=>'Yes',
					'twoCodeused'=>'Yes',
					'ISDPhone'=>array('$ne'=>null),
					'secret'=>array('$ne'=>null)
				)),
				array('$group' => array( '_id' => array(
						'ISDCountry'=>'$IPinfo.country',
						'ISDPhone' => '$ISDPhone',
					),
					'count' => array('$sum'=>1),
				)),
				array('$sort'=>array(
					'count'=>-1,
				))
		)));

		$countries = Countries::find('all');
		$country = array();
		foreach($countries as $count){
			array_push($country,array(
				'country'=>$count['Country'],
				'ISO'=>$count['ISO'],
				'Phone'=>$count['Phone'],
			));
			
		}
		
		$function = new Functions();
		
		foreach ($result['result'] as $i=>$_) {
				$key = $function->search($country,'Phone',$result['result'][$i]['_id']['ISDPhone']);
				
				
				$result['result'][$i]['_id']['country']=$key;
		}
		
		return compact('result');
	}
	public function contact(){}
	public function aboutus(){}
	public function risk(){}
	public function privacy(){}
	public function terms(){}
	public function how(){}
	public function FAQ(){}
	
	
}
?>