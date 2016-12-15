<?php

  include_once('AbstractPHPBook.php');
  
  class DiaryPHPBook extends AbstractPHPBook {
  
    private $author;
    
    private $title;
    
    function __construct() {
          
      mt_srand((double)microtime()*10000000);
      $rand_num = mt_rand(0,1);      
      
      if (1 > $rand_num) {
        $this->author = 'Alexandre Dumas';
        $this->title  = 'The Three Musketeers';
      } else {
        $this->author = 'William Shakespeare';
        $this->title  = 'Hamlet'; 
      }  
    }
  
    function getAuthor() {return $this->author;}
    
    function getTitle() {return $this->title;}
  
  }

?>
