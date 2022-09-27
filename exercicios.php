<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>
    <!--a) -->
 <form action="" method="get">
  Tabuada do:  <input type="text" name="num" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 

 <?php 
  $tabuada = $_GET['num'];
  $count=1;
  
  while($count<=10){
   echo $tabuada." x ".$count." = ".($tabuada*$count)."<br />";
   $count++;
  }

  echo "B)";
  $letras= ["a","z","m"];

  for($i = 0; $i < count($letras); $i++)
   echo $letras[$i] . "<br>";
  echo "<br>";
   echo '<p>Invertendo!<p>';
  function inverter(){
  $letras= ["a","z","m"];
  $letras = array_reverse($letras, false); 
  for($i = 0; $i < count($letras); $i++)
    echo $letras[$i] . "<br>";
  }
  inverter();

  echo "C)";
function maior_num(){
    $_reverse = [1, 2, 3, 101, 5];
    $maior = 0;
    foreach($_reverse as $a){
        echo $a.'<br>';
        if($a > $maior){
            $maior = $a;
        }
    }
    echo "O maior número é".$maior;
}
maior_num()

echo "D)";
$CPF_LENGTH = 11;
  $cnpj_cpf = preg_replace("/\D/", '', $value);
  
  if (strlen($cnpj_cpf) === $CPF_LENGTH) {
    return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
  } 
  return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);

echo "E)";
Function convert_temp($i){ 
    $f=$i; 
    $c= ($f-32)/18; 
    echo "Fahrenheit :".$f."º, celsius :".$c."º."; 
    } 
    convert_temp(90); 
    echo'<br>'; 
    convert_temp(77); 
    echo'<br>'; 
    convert_temp(52); 
    echo'<br>'; 
    convert_temp(12); 

echo "F)";
function busca_texto1($b){ 
    echo "Foi encontrada a palavra:"."<p style='color:red;'>".$b."<p style='color:black;'>"; 
    } 
    $busca_texto= 'busca_texto1'; 
        $texto=["Rosa","Violeta","Bromelia","Caliandra","Magnolia","Cravo"]; 
        foreach ($texto as $b) { 
            $busca_texto($b); 
            echo "<br>"; 

echo "G)";
function soma_num(){ 
    $numeros = [1, 25, 15, 7, 5]; 
    $menor = 0; 
    $string="Valores no vetor: ".implode(",",$numeros).'<br>'; 
    echo $string; 
    foreach($numeros as $a){ 
        if($a > 0){ 
            $soma = array_sum($numeros); 
        } 
    } 
    echo "A soma é: ".$soma; 
} 
soma_num() 
 ?>
 </body>
</html>