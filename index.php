<?php include "functions.php" ?> 


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