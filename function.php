<?php
   
   $num1=$_POST["num1"];
   $num2=$_POST["num2"];
   $oprand= $_POST["oprand"];
    function calfunc($num1,$oprand,$num2){
        $sum=0;
        switch ($oprand){
            case "plus":
            $sum=$num1+$num2;
            
           break;
           case "minus":
            $sum=$num1-$num2;
           break;
           case "muliple":
            $sum=$num1*$num2;
           break;
           default:
            $sum="there was an error";
           break;
        }
     return $sum;   
    }
    
   echo "value:".calfunc($num1,$oprand,$num2);
   document.querySelector("input").addEventListener("keypress", function (evt) {
      if (evt.which < 48 || evt.which > 57)
      {
          evt.preventDefault();
      }
  });
?>
<br>
<a href="index.php">Back</a>