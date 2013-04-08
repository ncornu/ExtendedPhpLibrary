<?php

require_once('../src/Types/String.php');

  class StringTest extends PHPUnit_Framework_TestCase
  {
      protected function setUp()
      {
          
      }
      
      public function testToUpper()
      {
          $s = new String("abc");
          $this->assertAreEqual("ABC", $s->toUpper());
      }
  }
?>
