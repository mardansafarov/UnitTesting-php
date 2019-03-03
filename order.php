<?php 
require('menuItem.php');

class order
{

	private $id;
	private $username;	
	private $productName = array();
	private $timeInterval;
	public function __construct()
	{

	}

	public function getTotalPrice(){
		$total=0;
		for( $i = 0; $i<sizeof($this->productName); $i++ ) {
            $total+=$this->productName[$i]->getTotal();
         }
		return $total;
	}
	public function order(){
  	$order=$this->id." ".$this->username." : ";
  	for( $i = 0; $i<sizeof($this->productName); $i++ ) {
            $order.=$this->productName[$i]->getName()."(";
            $order.=$this->productName[$i]->getQuantity().");";
         }
  		return $order;
 }

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		return $this->id=$id;
	}
	public function getUsername(){
		return $this->username;
	}
	public function setUsername($username){
		return $this->username=$username;
	}
	public function getProductName(){
		return $this->productName;
	}
	public function setProductName($productName){
		return $this->productName=$productName;
	}
	public function getTimeInterval(){
		return $this->timeInterval;
	}
	public function setTimeInterval($timeInterval){
		return $this->timeInterval=$timeInterval;
	}
		public function set($id,$username,$productName, $timeInterval)
	{
		 $this->id = $id;
         $this->username = $username;
         $this->productName = $productName;
         $this->timeInterval = $timeInterval;

	}


	
}





?>