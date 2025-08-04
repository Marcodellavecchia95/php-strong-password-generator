<?php 
function password_generator($length = 0){
    $uppercaseAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercaseAlphabet = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "12345678910";
    $symbols = "!@#$%^&*()";
    $allChars= "";

    if (isset($_GET["uppercase"]) && $_GET["uppercase"] == "on"){
        $allChars.=$uppercaseAlphabet;
    }
     if (isset($_GET["lowercase"]) && $_GET["lowercase"] == "on"){
        $allChars.=$lowercaseAlphabet;
    } if (isset($_GET["numbers"]) && $_GET["numbers"] == "on"){
        $allChars.=$numbers;
    } if (isset($_GET["symbols"]) && $_GET["symbols"] == "on"){
        $allChars.=$symbols;
    }

  
    $randomPass="";



    for($i=0; $i<$length; $i++){
        $random = rand(0,strlen($allChars)-1);
        $randomChar= substr($allChars, $random ,1);
       $randomPass .= $randomChar ;
    }
    return $randomPass;

}
?>