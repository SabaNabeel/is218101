<?php

  include_once('AbstractPHPBook.php');
  
  class BookPHPBook extends AbstractPHPBook {
  
    private $author;
    
    private $title;
    
    private static $oddOrEven = 'odd';
    
    function __construct() {
          
      if ('odd' == self::$oddOrEven) {
        $this->author = 'Romeo and Juliet';
        $this->title  = 'William Shakespeare';
        self::$oddOrEven = 'even';
      } else {
        $this->author = 'Neil Gaiman';
        $this->title  = 'Americans God'; 
        self::$oddOrEven = 'odd';
      }  
    }
  
    function getAuthor() {return $this->author;}
    
    function getTitle() {return $this->title;}
  
  }

?>
