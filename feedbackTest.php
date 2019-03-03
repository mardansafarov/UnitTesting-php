<?php 
require 'feedback.php';
use PHPUnit\Framework\TestCase;
/**
* 
*/
class feedbackTest extends TestCase
{
 public $item;

       /**
     * @dataProvider surname
     */
 public function testGetSurname($name,$surname,$feedback,$expected){
    $this->item = new feedback($name, $surname, $feedback);
    $price = $this->item->getSurname();
    $this->assertEquals($expected,$surname);
 }

    /**
     * @dataProvider name
     */
    public function testSetName($name,$surname,$feedback,$newName,$expected){
	  $this->item = new feedback($name,$surname,$feedback);
  	$this->item->setName($newName);
  	$this->assertEquals($expected,$this->item->getName());

    }

        /**
     * @dataProvider surnameS
     */
    public function testSetSurname($name,$surname,$feedback,$newSurname,$expected){
    $this->item = new feedback($name,$surname,$feedback);
    $this->item->setSurname($newSurname);
    $this->assertEquals($expected,$this->item->getSurname());

    }

        /**
     * @dataProvider feedback
     */
    public function testSetFeedback($name,$surname,$feedback,$newFeedback,$expected){
    $this->item = new feedback($name,$surname,$feedback);
    $this->item->setFeedback($newFeedback);
    $this->assertEquals($expected,$this->item->getFeedback());

    }

    public function surname()
    {
        return [
            ["Mardan", "Safarov","good job", "Safarov"],
            ["Emil", "Kalbaliyev","great", "Kalbaliyev"]

        ];

    }  

    public function feedback()
    {
        return [
            ["Mardan", "Safarov","good job", "very bad", "very bad" ],
            ["Emil", "Kalbaliyev","great", "satisfied", "satisfied" ]


        ];
    }
        public function name()
    {
        return [
            ["Mardan", "Safarov","good job", "Emil", "Emil" ],
            ["Murad", "Aghayev","great", "Vasif", "Vasif" ]


        ];
    }

            public function surnameS()
    {
        return [
            ["Mardan", "Safarov","good job", "Aliyev", "Aliyev" ],
            ["Emil", "Kalbaliyev","great", "Aghayev", "Aghayev" ]


        ];
    }
}


?>