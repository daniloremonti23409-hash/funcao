
<?php
/*
Crie uma função em PHP que receba um nome como parâmetro e exiba uma mensagem de saudação personalizada.
Crie uma função que receba dois números como parâmetros, realize a soma e retorne o resultado.
Crie uma função que receba um número inteiro e retorne se ele é par ou ímpar.
Crie uma função que receba três números como parâmetros e retorne o maior valor entre eles.
Crie uma função que receba uma string e retorne essa string invertida, sem utilizar funções prontas do PHP para inversão.
Crie uma função que receba o valor de uma compra e aplique descontos conforme a regra: acima de R$ 100,00 recebe 10%; acima de R$ 300,00 recebe 15%; acima de R$ 500,00 recebe 20%.
Crie uma função que receba nome e sobrenome e gere um login no formato:
primeironome.sobrenome
Crie uma função que receba o valor de um produto e retorne o valor do frete:
até R$100 → R$20
até R$300 → R$15
acima disso → frete grátis
9.Crie uma função que receba uma senha e verifique se ela atende aos critérios:

mínimo 8 caracteres
possui número
possui letra maiúscula
10. Crie uma função em PHP chamada gerarToken() que gere um token aleatório para ser utilizado em sistemas de login, recuperação de senha ou confirmação de cadastro.
A função deve:

gerar uma sequência aleatória de caracteres;
permitir definir o tamanho do token;
retornar o token gerado;
exibir o token na tela.
Ex.: A7x9Kp2LmQ
*/


// atividade 1 //


function saudacoes($nome){

    echo "seja bem vindo $nome a nossa plataforma!";
    
    }
    
echo saudacoes("Danilo");
echo "<br>";


//atividade 2 //


function soma($v1,$v2){
return $v1+$v2;

}

$resultado = soma(15,3);
echo $resultado;
echo "<br>";

// atividade 3 //

function parImpar($valor){
if($valor % 2 == 0 ){
echo " $valor e par!";

}
else{
    echo "$valor e impar!";
}

}
echo parImpar(6);
echo "<br>";

// atividade 4 //

function maiorValor($v1,$v2,$v3){
if($v1 > $v2 && $v3){
echo "O maior valor e $v1 !";

}elseif($v2 > $v1 && $v3){
echo "O maior valor e $v2 !";

}
elseif($v3 > $v1 && $v2){
    echo "O maior valor e $v3 !";

}
else{

    echo "Nenhum valor encontrado!";
}
}

echo maiorValor(1,4,8);
echo "<br>";

// atividade 5 //

function inverter($str){
$invertido ='';
$i = strlen($str);

while ($i--){
$invertido .= $str[$i];

}

return $invertido;

}

echo inverter("Carambolas");
echo "<br>";

?>

