<?php

//copyright Lawrence Truett and www.FluffyCat.com 2005, all rights reserved

//Factory
  include_once('BookFactoryMethod.php');  
  include_once('DiaryFactoryMethod.php');
  
 //Decorator 
  include_once('Book.php');
  include_once('BookTitleDecorator.php');
  include_once('BookTitleExclaimDecorator.php');
  include_once('BookTitleStarDecorator.php');
  
 //Singleton
  include_once('BookSingleton.php');
  include_once('BookBorrower.php');
  

  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");
  
//Book Method
  echo "Design 1";
  echo tagins("br").tagins("br");
  
  //echo 'testing BookFactoryMethod'.tagins("br");
  $factoryMethodInstance = new BookFactoryMethod;
  testFactoryMethod($factoryMethodInstance);
  echo tagins("br");
  
  echo tagins("/body");
  echo tagins("/html");

  function testFactoryMethod($factoryMethodInstance) {

    $phpUs = $factoryMethodInstance->makePHPBook("us");
    echo 'This is the first book: '.	
	  $phpUs->getAuthor().tagins("br");
    echo 'The author is : '.	
	  $phpUs->getTitle();
	  
	echo tagins("br").tagins("br");
	
//Decorater 
	
	$patternBook = 
    new Book("Romeo and Juliet");
				
  $decorator = new BookTitleDecorator($patternBook);
  $starDecorator = new BookTitleStarDecorator($decorator);
  $exclaimDecorator = new BookTitleExclaimDecorator($decorator);
  
	echo "showing title : " ;
	echo $decorator->showTitle();
	echo tagins("br").tagins("br");
	  
//Singleton
  $bookBorrower1 = new BookBorrower();
  $bookBorrower1->borrowBook();
  writeln('the play was first published 1597.');
  writeln('the First book Author and Title: ');
  writeln($bookBorrower1->getAuthorAndTitle());
  writeln(''); 
  
	 
//Factory

	echo "Design 2";
	echo tagins("br").tagins("br");
	
	$phpUs = $factoryMethodInstance->makePHPBook("other");
		echo 'This is a second Book: '.	
	$phpUs->getAuthor().tagins("br");
		echo 'The author is : '.	
	$phpUs->getTitle();
	  
	echo tagins("br").tagins("br");

  //Decorater 
	
	$patternBook = 
    new Book("The Three Musketeers");
				
  $decorator = new BookTitleDecorator($patternBook);
  $starDecorator = new BookTitleStarDecorator($decorator);
  $exclaimDecorator = new BookTitleExclaimDecorator($decorator);
  
	echo "showing title : " ;
	echo $decorator->showTitle();
	echo tagins("br").tagins("br");
	  
//Singleton
  $bookBorrower1 = new BookBorrower();
  $bookBorrower1->borrowBook();
  writeln('This book was published in 1844.');
  writeln('the second book Author and Title: ');
  writeln($bookBorrower1->getAuthorAndTitle());
  writeln(''); 
  
  
  
  //Factory

	echo "Design 3";
	echo tagins("br").tagins("br");
	
	$phpUs = $factoryMethodInstance->makePHPBook("otherother");
		echo 'This is a third Book: '.	
	$phpUs->getAuthor().tagins("br");
		echo 'The author is : '.	
	$phpUs->getTitle();
	  
	echo tagins("br").tagins("br");

  //Decorater 
	
	$patternBook = 
    new Book("Americans God");
				
  $decorator = new BookTitleDecorator($patternBook);
  $starDecorator = new BookTitleStarDecorator($decorator);
  $exclaimDecorator = new BookTitleExclaimDecorator($decorator);
  
	echo "showing title : " ;
	echo $decorator->showTitle();
	echo tagins("br").tagins("br");
	  
//Singleton
  $bookBorrower1 = new BookBorrower();
  $bookBorrower1->borrowBook();
  writeln('This is Neil Gaiman book');
  writeln('the third book Author and Title: ');
  writeln($bookBorrower1->getAuthorAndTitle());
  writeln(''); 
  
  
  
  }
  
  function writeln($line_in) {
    echo $line_in.'<'.'BR'.'>';
  } 



  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  } 

?>

