
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <h3>Seus dados foram salvos no arquivo: notas.txt em formato JSON</h3>
    <h3>Veja seus dados clicando no link abaixo</h3>
    <a href="v_endpage.php">Veja a tabela aqui</a>
</body>
</html>
<?php

$pessoa["nome"] = $_POST["nome"];
$pessoa["genero"] = $_POST["genero"];
$pessoa["nasc"]= $_POST["nasc"];
$pessoa["phone"] = $_POST["phone"];
$pessoa["email"] = $_POST["email"];

$dados= json_encode($pessoa); 

$arq=fopen("notas.txt","a");
fwrite($arq,$dados."\r\n");
fclose($arq);

?>