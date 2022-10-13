<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='home.php' method="get">
  Nota 1: <input type="text" name="num1"><br>
  Nota 2: <input type="text" name="num2"><br>
  <input type="submit">
 </form>
 
 <?php 
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  
  $media = ($num1 + $num2)/2;
  
  echo "Média: $media";
 ?>
</body>
</html>