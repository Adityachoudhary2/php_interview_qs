 <?php
 
 function apple(){
    function banana(){
        return "banana";
    }
    // echo banana(); 1
    return "apple";

 }
 

 echo apple(); // Output: apple
    echo "<br>";
    echo banana(); // Output: banana 2
 
 ?>