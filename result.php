 <?php include "functions.php"?>

 <h3>La tua Password è: <?php if (isset($_GET["length"])) echo password_generator($_GET["length"]);?></h3>