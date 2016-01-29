<?php
require_once dirname(__DIR__) . '/src/Whovian.php'; 

class WhovianTest extends PHPUnit_Framework_TestCase 
{
    public function testSetsDoctorWithConstructor()
    {
        $whovian = new Whovian("Peter Cabaldi");
        $this->assertAttributeEquals("Peter Cabaldi", "favoriteDoctor", $whovian);
    }
    
    public function testSaysDoctorName()
    {
        $whovian = new Whovian("Peter Cabaldi");
        $this->assertEquals("Najlepszy doktor to Peter Cabaldi", $whovian->say());
    }
    
    public function testRespondToInAgreement() 
    {
        $whovian = new Whovian("David Tennant");
        $opinion = "Najlepszy doktor to David Tennant";
        $this->assertEquals("Zgadzam się.", $whovian->respondTo($opinion));
    }
    
    /**
     *  @expectedException Exception
     */
    public function testRespondToInDisagreement() 
    {
        $whovian = new Whovian("David Tennant");
        $opinion = "Najlepszy doktor to Peter Cabaldi";
        $whovian->respondTo($opinion);
    }
}
?>