<?php
  class EPLString //extends SplType
  {
      protected $string;
      
      public function __construct($string)
      {
          $this->string = $string;
      }
      
      public function toUpper()
      {
          return strtoupper($this->string);
      }
      
      public function startWith($string)
      {
          return strpos($this->string, $string) === 0;
      }
      
      public function contain($string)
      {
          return strpos($this->string, $string) !== false;
      }
  }
?>
