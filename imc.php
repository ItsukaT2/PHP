<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="calcular.php">
Peso: <input type="text" size="20" name="peso"><br>
Altura: <input type="text" size="20" name="altura"><br>
<input type="submit" value="Calcular">
</form>

<?php
function calcula_obesidade($peso, $altura)
{
return $peso / ($altura * $altura);
}

$massa = calcula_obesidade(90, 1.70);

if ($massa <= 17) {
$mensagem = "Muito abaixo do peso";
}
elseif(($massa > 17) and ($massa <=18.49)) {
$mensagem = "Abaixo do peso";
}
elseif(($massa > 18.49) and ($massa <=24.99)) {
$mensagem = "Peso Normal";
}
elseif(($massa > 24.99) and ($massa <=29.99)) {
$mensagem = "Acima do Peso";
}
elseif(($massa > 29.99) and ($massa <=34.99)) {
$mensagem = "Obesidade I";
}
elseif(($massa > 34.99) and ($massa <=39.99)) {
$mensagem = "Obesidade II (severa)";
}
else {
$mensagem = "Obesidade III (mórbida)";
}

echo "Sua Massa Corporal é: <b> $massa </b><br>";
echo "Estado Atual: <b> $mensagem</b>";
?>
</body>
</html>