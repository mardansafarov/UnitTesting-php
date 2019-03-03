<?php 
require 'order.php';
require_once('menuItem.php');

use PHPUnit\Framework\TestCase;
/**
* 
*/
class orderTest extends TestCase
{
public $item ;
 	
 
 public function testGetTotal(){
 	$items[0]=new menuItem("soup", 1.7, 4);
 	$items[1]=new menuItem("soup", 1.7, 4);
  	$this->item = new order();
  	$this->item->setProductName($items);
  	$total = $this->item->getTotalPrice();
  	$this->assertEquals(13.6,$total);
 	}
  public function testOrderFunction(){
  $items[0]=new menuItem("soup", 1.7, 4);
  $items[1]=new menuItem("burger", 5, 2);
  $this->item = new order();
  $this->item->set(1234,"Ali",$items,"14:20");
  $order = $this->item->order();
  $this->assertEquals("1234 Ali : soup(4);burger(2);",$order);
 }

       /**
     * @dataProvider id
     */
  public function testGetId($id,$username,$productName,$timeInterval, $expected){
    $this->item = new order();
    $this->item->set($id,$username,$productName,$timeInterval);
    $id = $this->item->getId();
    $this->assertEquals($expected,$id);
 }
 
                 /**
     * @dataProvider idS
     */
    public function testSetId($id,$username,$productName,$timeInterval,$newId, $expected){
    $this->item = new order();
    $this->item->set($id,$username,$productName,$timeInterval);
    $this->item->setId($newId);
    $this->assertEquals($expected,$this->item->getId());

    }

        /**
     * @dataProvider username
     */
    public function testSetUserame($id,$username,$productName,$timeInterval,$newUsername, $expected){
    $this->item = new order();
    $this->item->set($id,$username,$productName,$timeInterval);
  	$this->item->setUsername($newUsername);
  	$this->assertEquals($expected,$this->item->getUsername());

    }

                /**
     * @dataProvider productName
     */
    public function testSetProductName($id,$username,$productName,$timeInterval,$newProductName, $expected){
    $this->item = new order();
    $this->item->set($id,$username,$productName,$timeInterval);
    $this->item->setProductName($newProductName);
    $this->assertEquals($expected,$this->item->getProductName());

    }
                /**
     * @dataProvider timeInterval
     */
    public function testSetTimeInterval($id,$username,$productName,$timeInterval,$newTimeInterval, $expected){
    $this->item = new order();
    $this->item->set($id,$username,$productName,$timeInterval);
    $this->item->setTimeInterval($newTimeInterval);
    $this->assertEquals($expected,$this->item->getTimeInterval());

    }


        public function id()
    {
        return [
            [3578, "Mardan","soup", "13:20", 3578],
            [1234, "Murad","burger", "11:20", 1234]

        ];

    }


            public function idS()
    {
        return [
            ["1234", "Safarov","pizza", "12:00", "0000", "0000" ],
            ["1234", "Aliyev","pizza", "12:00", "0000", "0000" ],


        ];
    }

            public function username()
    {
        return [
            ["1234", "Safarov","pizza", "12:00", "Emil", "Emil" ],
            ["1234", "Aliyev","pizza", "12:00", "Arif", "Arif" ],


        ];
    }

            public function productName()
    {
        return [
            ["1234", "Safarov","pizza", "12:00", "burger", "burger" ],
            ["1234", "Aliyev","pizza", "12:00", "burger", "burger" ],


        ];
    }

            public function timeInterval()
    {
        return [
            ["1234", "Safarov","pizza", "12:00", "13:30", "13:30" ],
            ["1234", "Aliyev","pizza", "12:00", "11:00", "11:00" ],


        ];
    }







}

?>