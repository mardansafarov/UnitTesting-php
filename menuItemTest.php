<?php 
require 'menuItem.php';
use PHPUnit\Framework\TestCase;
/**
* 
*/
class menuItemTest extends TestCase
{
   public $item;

  /**
     * @dataProvider name
     */
 
 public function testGetName($name,$price,$quantity,$expected){
    $this->item = new menuItem($name, $price, $quantity);
    $name = $this->item->getName();
    $this->assertEquals($expected,$name);
  }


    /**
     * @dataProvider price
     */
 public function testGetPrice($name,$price,$quantity,$expected){
    $this->item = new menuItem($name, $price, $quantity);
    $price = $this->item->getPrice();
    $this->assertEquals($expected,$price);
 }

    /**
     * @dataProvider quantity
     */
 public function testGetQuantity($name,$price,$quantity,$expected){
    $this->item = new menuItem($name, $price, $quantity);
    $quantity = $this->item->getQuantity();
    $this->assertEquals($expected,$quantity);
 }

    /**
     * @dataProvider quan
     */
    public function testSetQuantity($name,$price,$quantity,$newQuantity,$expected){
	 $this->item = new menuItem($name, $price, $quantity);
  	$this->item->setQuantity($newQuantity);
  	$this->assertEquals($expected,$this->item->getQuantity());

    }

      /**
     * @dataProvider total
     */
 
 public function testGetTotal($name,$price,$quantity,$expected){
    $this->item = new menuItem($name, $price, $quantity);
    $total = $this->item->getTotal();
    $this->assertEquals($expected,$total);
  }
 
         public function name()
    {
        return [
            ["soup", 4, 4, "soup"],
            ["cola", 5, 5,"cola"],
            ["burger", 13.2,7,"burger"],
            ["soup", 13,8,"soup"]
        ];

    }
      public function price()
    {
        return [
            ["soup", 4, 4, 4],
            ["cola", 5, 5,5],
            ["burger", 13.2,7,13.2],
            ["soup", 13,8,13]
        ];

    }  
 
         public function quantity()
    {
        return [
            ["soup", 4, 4, 4],
            ["cola", 5, 5,5],
            ["burger", 13.2,7,7],
            ["soup", 13,8,8]
        ];

    } 
    public function quan()
    {
        return [
            ["soup", 3, 2,5,5],
            ["cola", 5, 6,1,1],
            ["burger", 13.2,7,13,13],
            ["soup", 13,8,5,5]
        ];
    }

    public function total()
    {
        return [
            ["soup", 1.7, 4,6.8],
            ["cola", 4, 5,20],
            ["burger", 11, 7,77],
            ["soup", 13, 8,104]
        ];
    }
}

?>