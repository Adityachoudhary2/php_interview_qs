 <?php

 $a=null;
 $b;
 $c="";

var_dump($a == $b); // true, because null is equal to null
var_dump($a === $b);
    
     // true, because null is equal to an empty string
var_dump($a == $c); // true, because null is equal to an empty string
var_dump($a === $c); // false, because null is not equal to an empty string



 ?>