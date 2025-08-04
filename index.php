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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
</head>
<body>
    <h1>Generatore Password Casuale</h1>
   
    <form>
        <label  for="number">Lunghezza password: </label>
        <input id="length" name="length"  type="number" min=1 max=10>
     <button>Genera Password</button>
    </form>
     <hr>
    <h3>La tua Password è: <?php if (isset($_GET["length"])) echo password_generator($_GET["length"]);?></h3>
</body>
</html>