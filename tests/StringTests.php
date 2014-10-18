<?php

require_once(__DIR__ . '\..\src\Types\String.php');

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
      
      public function testStartWithNot()
      {
          $s = new EPLString((string)"ab");
          $this->assertEquals(false, $s->startWith("abc"));
      }
      
      public function testContain()
      {
          $s = new EPLString((string)"abcd");
          $this->assertEquals(true, $s->contain("abc"));
      }
      
      public function testContainNot()
      {
          $s = new EPLString((string)"ab");
          $this->assertEquals(false, $s->contain("abc"));
      }
  }
?>
