 <?php
 function callMe(){
    echo "function calld";

 }
 
function callMe2(){
        echo "function calld2";
    
    }

 function apple(){
    echo "apple called ";

 }

 if(true){
     apple('callMe');

 }else{
    apple('callMe2');
 }
 
 
 
 ?>