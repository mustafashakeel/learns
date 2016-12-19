<?php

// class Family{
// function Family(){
// 	return "asfasdfsda";
// }
// }

// $aa = new Family();

// echo $aa;

// class Car {
//     function Car() {
//         $this->model = "VW";
//     }
// }
// // create an object
// $herbie = new Car();

// // show object properties
// echo $herbie->model;

   class Books {
      /* Member variables */
      var $price;
      var $title;
      var $aa ='asfasdfad';
    //  echo $aa;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }

      function bb(){
      	echo $this->aa;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }

   $physics = new Books;
	$maths = new Books;
	$chemistry = new Books;
	$physics->bb();

	$physics->setTitle( "Physics for High School" );
	$chemistry->setTitle( "Advanced Chemistry" );
	$maths->setTitle( "Algebra" );

	$physics->setPrice( 10 );
	$chemistry->setPrice( 15 );
	$maths->setPrice( 7 );

	$physics->getTitle();
	$chemistry->getTitle();
	$maths->getTitle();
	$physics->getPrice();
	$chemistry->getPrice();
	$maths->getPrice();

?>