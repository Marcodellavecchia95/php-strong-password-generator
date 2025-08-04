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
    <form action="">
        <label id="length" name="length" for="">Lunghezza password</label>
        <input type="number">
      <?php echo password_generator(5)?>
    </form>
</body>
</html>