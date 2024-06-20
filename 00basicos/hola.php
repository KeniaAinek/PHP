<?php
//Comentario de una sola linea 

/* Comentario 
de varias lineas */

//imprimir en pantala
echo("Hola mundo");

echo("</br>Hola cruel mundo<br/><h1>estoy apreniendo PHP</h1>");

//variables
$nombre = "Kenia";
$Nombre = "Valentina";
//Concatenacion de cadenas y variables
echo $nombre." & ".$Nombre;
echo "<br/>";
$num1 = 5;
$num2 = 78;
$suma = $num1 + $num2;
echo $suma;
echo "<br/>";
echo "La variables \$suma tiene el valor de $suma </br>";

//Estructuras
$modulo = $num2 % 2;
if($modulo == 0){
    echo "El n&uacutemero es Par";
}else{
    echo "El n&uacutemero es impar";
}
echo "</br>";

for($i = 0; $i <= 10; $i++){
    echo $i."<br/>";
}

?>