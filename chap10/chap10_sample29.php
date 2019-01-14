<?php
 class Item 
 {
   var $name;
   var $code;
   function  __construct( $name="item", $code=0) {
     echo "<pre>Constructor method from Item Class\n";
     $this->name = $name;
     $this->code = $code;
   }
   function print1() {
    echo "$this->code  $this->name";
   }
 }
 class PriceItem extends Item 
 {
 }
//***********************************************
 $item = new PriceItem( "widget", 5442 );
 $item->print1();
 ?>
