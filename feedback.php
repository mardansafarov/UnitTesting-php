<?php  

/**
* 
*/
class feedback
{
	private $name;
	private $surname;
	private $feedback;
	public function __construct()
	{
	}
	
	public function getName(){
		return $this-> name;
	}
	public function setName($name){
		return $this-> name=$name;
	}
	public function getSurname(){
		return $this-> surname;
	}
	public function setSurname($surname){
		return $this-> surname=$surname;
	}
	public function getFeedback(){
		return $this-> feedback;
	}public function setFeedback($feedback){
		return $this-> feedback =$feedback;
	}
	public function set($name,$surname,$feedback)
	{
		 $this->name = $name;
         $this->surname = $surname;
         $this->feedback = $feedback;
	}
	
}



?>