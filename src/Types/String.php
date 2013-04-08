<?php
  class String //extends SplType
  {
      protected $string;
      
      public function __construct(string $string)
      {
          $this->string = $string;
      }
      
      public function toUpper()
      {
          return ucfirst($this->string);
      }
  }
?>
