<?php
namespace source;
 require_once '../vendor/autoload.php';
//require'C:\xampp\htdocs\TestOnly\source\ValidatePassword.php';
class ValidatePasswordTest extends \PHPUnit_Framework_TestCase{


public function testValidLength(){



  $valPass=new ValidatePassword();
  $this->assertFalse($valPass->validLength('1234'));
}
}
