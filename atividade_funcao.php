
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

?><br><br>
// exercicio 6 //<br><br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="" method="post">
<label for="">Valor da compra</label><br><br>
<input type="number" name="valor"> digite o valor aqui<br><br>
<button type="submit">Comprar</button><br><br>

</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {    

    $valor = $_POST["valor"];

    function descontoCompra($valor) {

        if ($valor >= 100 && $valor <= 299) {
            return "Desconto de 10%!<br>O valor final é " . ($valor - ($valor * 0.1));

        } elseif ($valor >= 300 && $valor <= 499) {
            return "Desconto de 15%!<br>O valor final é " . ($valor - ($valor * 0.15));

        } elseif ($valor >= 500) {
            return "Desconto de 20%!<br>O valor final é " . ($valor - ($valor * 0.20));

        } else {
            return "Sem desconto.";
        }
    }

    echo descontoCompra($valor);
}

?>

<br><br>
// exercicio 7 //<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<label for="">Gerar login</label><br><br>
<label for=""> nome</label><br><br>
<input type="text" name="nome"><br><br>
<label for=""> sobrenome</label><br><br>
<input type="text" name="sobrenome"><br><br>
<button type="submit">Gerar login </button>

</form>


</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];

function gerarLogin($nome,$sobrenome){
return ($nome. "." . $sobrenome) ;

}

echo gerarLogin($nome,$sobrenome);
}


?>

<br>
// exercicio 8 //<br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<label for="">Valor de compra</label>
<input type="number" name="frete">
<button type="submit">Calcular frete</button>


</form>

</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$frete = $_POST["frete"];


function MostrarFrete($frete){
if($frete <= 100){
return "Até R$ 100 :Valor do frete será: R$ 20,00<br>";

}
elseif($frete >=101 && $frete <=300){
return "Até R$ 300: Valor do frete será: R$ 15,00<br>";

}elseif($frete > 300){
return "Você ganhou frete grátis!";

}
else{
return "nenhum valor encontrado!";

}

}

echo MostrarFrete($frete);

}

?>
<br><br>
// exercicio 09 //<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<label for="">Digitar senha</label>
<input type="text" name="senha">
<button type="submit">Testar senha</button>

</form>


</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$senha = $_POST["senha"];


function validarSenha($senha){

if(strlen($senha) < 8){
return "A senha deve possuir pelo menos 8 caracteres!";

}
if(!preg_match('/[0-9]/',$senha)){
return "a senha deve possuir numeros!";

}
if(!preg_match('/[A-Z]',$senha)){
return "a senha deve possuir letras maiusculas!";

}
return "senha invalida";
}



echo validarSenha($senha);
}

?>
<br><br>
// exercicio 10//<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<label for="">Gerar token </label>

<button type="submit" name="tamanho">Gerar</button>

</form>


</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$tamanho = $_POST["tamanho"];


function gerarToken($tamanho = 10){
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $token = '';

    for($i = 0; $i < $tamanho; $i++){
        $token .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $token;
}

// Gerando e exibindo o token
$tokenGerado = gerarToken(10);
echo "Token gerado: " . $tokenGerado;
}
?>