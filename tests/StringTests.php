<?php
require_once 'C:\Users\Nic\AppData\Roaming\PEAR\pear\PHPUnit/Autoload.php';
require_once('C:\Users\Nic\Desktop\ExtendedPhpLibrary\src\Types\String.php');

  class StringTest extends PHPUnit_Framework_TestCase
  {
      protected function setUp()
      {
          
      }
      
      public function testToUpper()
      {
          $s = new EPLString((string)"abc");
          $this->assertEquals("ABC", $s->toUpper());
      }
      
      public function testStartWith()
      {
          $s = new EPLString((string)"abcd");
          $this->assertEquals(true, $s->startWith("abc"));
      }
  }
?>
