


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
</head>
<body>
    <h1>Generatore Password Casuale</h1>
   
    <form action="result.php">
        <div>
        <label  for="length">Lunghezza password: </label>
        <input id="length" name="length"  type="number" min=1 max=10>
        </div>
 <div>
        <label  for="uppercase">Lettere Maiuscole</label>
        <input id="uppercase" name="uppercase"  type="checkbox">
        </div> 
        <div>
        <label  for="lowercase">Lettere Minuscole</label>
        <input id="lowercase" name="lowercase"  type="checkbox">
        </div> 
         <div>
        <label  for="numbers">Numeri</label>
        <input id="numbers" name="numbers"  type="checkbox">
        </div> 
         <div>
        <label  for="symbols">Simboli</label>
        <input id="symbols" name="symbols"  type="checkbox">
        </div> 
        
     <button>Genera Password</button>
    </form>
 
   
</body>
</html>