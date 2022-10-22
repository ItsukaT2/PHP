<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Dados:</td>
            <td>Resultados</td>
        </tr>
<?php
$arq=fopen("notas.txt","r");
$linha=fgets($arq);
$file=json_decode($linha,true);

//print_r ("$linha");

//Pensando...
echo ("<h1>Dados com um loop...</h1>");

$i=0;
$col1= array("Nome: ","Genero: ", "Data de nascimento: ", "Telefone: ", "Email: ");
while ($i <= 4) {  
    echo ("<tr><td>".$col1[$i]);
    echo ("<td>");
    foreach ($file as $u) {
        echo $u;
    }
    echo ("</td>");
    echo ("</td></tr>"); 
    $i++;
}
?>
</table>

<table>
<!--outra forma...-->
<tr>
    <td>Dados:</td>
    <td>Nome: </td>
    <td>Genero: </td>
    <td>Data de nascimento: </td>
    <td>Telefone: </td>
    <td>Email: </td>
</tr>
<?php

echo ("<h1>Ler todas as linhas do .txt</h1>");

$arq=fopen("notas.txt","r");

while(!feof($arq)) {
    $linha = fgets($arq, 4096);
    $file=json_decode($linha,true);

    echo ("<tr><td>"."coisas:");
    foreach ($file as $u) {
    echo ("<td>");
    echo $u;
    echo ("</td>");
}
    echo ("</td></tr>"); 
}

?>
</table>


<table>
        <?php
        //outra coisa
        $arq=fopen("notas.txt","r");
        $linha=fgets($arq);
        $file=json_decode($linha,true);
echo ("<br><h1>Dados sem loop</h1>");

echo ("<tr><td>Nome: <td>");
print_r($file['nome']);
echo ("</td></td></tr>");

echo ("<tr><td>Genero: <td>");
print_r($file['genero']);
echo ("</td></td></tr>");

echo ("<tr><td>Data de Nascimento: <td>");
print_r($file['nasc']);
echo ("</td></td></tr>");

echo ("<tr><td>Telefone: <td>");
print_r($file['phone']);
echo ("</td></td></tr>");

echo ("<tr><td>Email: <td>");
print_r($file['email']);
echo ("</td></td></tr>");
        ?>
</table>
</body>
</html>
