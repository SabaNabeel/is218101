<?php


  include_once('AbstractFactoryMethod.php');
  
  include_once('BookPHPBook.php');
  include_once('DiaryPHPBook.php');
  include_once('VisualQuickstartPHPBook.php');
  
  class DiaryFactoryMethod extends AbstractFactoryMethod {
  
    private $context = "Diary";  

    function makePHPBook($param) {
      $book = NULL;
      switch ($param) {
        case "us":
          $book = new DiaryPHPBook;
          break;		
        case "other":
          $book = new BookPHPBook;
          break;
        case "otherother":
          $book = new VisualQuickstartPHPBook;
          break;
        default:
          $book = new DiaryPHPBook;
          break;	  
      }	  
      return $book;
    }
  
  }

?>
