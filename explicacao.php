<?php

function mensagem(){
echo "seja bem vindo";

}

function comParametro($nome){
echo" seja bem vindo $nome";


}
function soma($valor1,$valor2){
    return $valor1 + $valor2;
}

function horaAtual(){
return date("H:i:s");

}
echo horaAtual();
echo"<br>";

$resultado = soma(10,5);
echo $resultado;
echo"<br>";

mensagem();
echo"<br>";
comParametro("Danilo");
echo"<br>";
?>