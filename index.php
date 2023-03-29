<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Operador Nullish coalescing -> verifica se o valor é null
    $null = null;
    $number = 10;
    $emptyText = "";

    $a = $null ?? 10;
    $b = $number ?? 12;
    $c = $emptyText ?? "Texto";

    echo "a = $a  b = $b  c = $c <br>";
    
    function A() {
        echo(" Funcao A foi chamada <br>");
        return null;
    }
    function B() {
        echo("Funcao B foi chamada <br>");
        return false;
    }
    function C() {
        echo("Funcao C foi chamada <br>");
        return "CACHOGATO <br>";
    }
        
    echo(A() ?? C());
        // Função A retorna null por isso a função C é chamada
        
    echo(B() ?? C());
        // Função B retorna false por isso a função C não é chamada

    $n1 = 1;
    $n2 = 2;
    //xor somente quando uma das opções é verdadeiro
    
    if($n1 > 1 xor $n2 > 1){
        echo "verdadeiro";
    }else{
        echo "falso";
    }
    echo "<br>";
    //xor negado se torna um xand
    if(!($n1 > 0 xor $n2 > 1)){
        echo "verdadeiro";
    }else{
        echo "falso";
    }
    echo "<br>";
    //Operador unário
        $nota1 = 7;
        $nota2 = 7;
        $situacao = ($nota1+$nota2)/2 == 7? 'APROVADO': "REPROVADO";
        echo "Situação do aluno $situacao" 

    ?>
</body>
</html>