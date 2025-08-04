<?php 
function password_generator($length = 0){
    $uppercaseAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercaseAlphabet = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "12345678910";
    $symbols = "!@#$%^&*()";
    $allChars= $uppercaseAlphabet . $lowercaseAlphabet .  $numbers . $symbols;
    $randomPass="";

    for($i=0; $i<$length; $i++){
        $random = rand(0,strlen($allChars)-1);
        $randomChar= substr($allChars, $random ,1);
       $randomPass .= $randomChar ;
    }
    return $randomPass;

}
?>