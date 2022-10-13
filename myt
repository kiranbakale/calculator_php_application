<?php

if(isset($_GET["submit"])){

    $v1 = $_GET["v1"];
    $v2 = $_GET["v2"];
    
   if($_GET["action"]=="plus"){
        $result= $v1+$v2;
        echo " $v1 + $v2 ";

   } else{
    $result= $v1-$v2;
    echo " $v1 - $v2 ";

   }
   echo "= $result";

}

?>
