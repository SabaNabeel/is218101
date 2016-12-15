<?php


  include_once('AbstractFactoryMethod.php');
  
  include_once('BookPHPBook.php');
  include_once('BookPHPBook.php');  
  
  class BookFactoryMethod extends AbstractFactoryMethod {
  
    private $context = "Book";  
  
    function makePHPBook($param) {

	  $book = NULL;
	
      switch ($param) {
        case "us":
          $book = new BookPHPBook;
          break;
        case "other":
          $book = new DiaryPHPBook;
          break;
        default:
          $book = new BookPHPBook;
          break;		  
      }
	  
	  return $book;
	  
	}
  
  }

?>
