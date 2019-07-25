
<html>
<head lang="pt-br">
<meta charset="utf-8">
<meta name="description" content="Teste de tabuada.">
<meta name="keywords" content="tabuada, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10">
<meta property="og:title" content="Bruno Russo e Miguel Russo"/>
<meta property="og:description" content="Tabuada do 0 a 10."/>
<meta property="og:image" content="https://tabuada.solucaolivre.com.br/logo.png"/>
<meta name="robots" content="index, follow">
<meta name="application-name" content="TABUADA">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabuada do 0 a 10</title>
</head>
<style>
        p{
        color: red;
        font-family: verdana;
        font-size: 100px;
        }
        .x{
        color: black;
        font-family: verdana;
        font-size: 70px;
        }
        #texto{
        color: black;
        font-family: verdana;
        font-size: 28px;
        }
        #resposta1{
        background: #4CAF50;
        border: none;
        width: 90px;
        float: left;
        }
        #resposta2{
        background: DodgerBlue;
        border: none;
        width: 90px;
        float: left;
        }
        #resposta3{
        background: Orange;
        border: none;
        width: 90px;
        float: left;
        }
        #resposta4{
        background: yellow;
        border: none;
        width: 90px;
        float: left;
        }
        #resultadocorreto{
        color: black;
        font-family: verdana;
        font-size: 30px;
        }
        #resultadoerrado{
        color: red;
        font-family: verdana;
        font-size: 30px;
        }
        .b1 {
        background-color: #4CAF50; 
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
	font-weight: bold;
        }
        .b2 {
        background-color: DodgerBlue;
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
	font-weight: bold;
        }
        .b3 {
        background-color: Orange;
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
	font-weight: bold;
        }
        .b4 {
        background-color: yellow; 
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
	font-weight: bold;
        }

</style>
<script>
function errou() {
        document.getElementById("resultadoerrado").innerHTML = "Não foi desta vez... estude mais! <br>Carregando o próximo desafio.";
        setTimeout(function(){
                location.reload();
        }, 2500);
}
function acertou() {
        document.getElementById("resultadocorreto").innerHTML = "Parabéns, você acertou!!! <br>Carregando o próximo desafio.";
        setTimeout(function(){
                location.reload();
        }, 2500);
}
</script>
</script>
<body bgcolor="#f0f0f0">
<?php

/*
Exibe os numerospara serem calculados
*/

$num_1=mt_rand(1,10);
$num_2=mt_rand(1,10);
?>

<table border="0" width="50%" background="#a0a0a0" cellpading="0" cellspacing="0">
<tr>
<th>
<?php echo "<p>$num_1</p>"; ?>
</th>
<th>
<p class="x">&nbsp;&nbsp;X&nbsp;&nbsp;</p>
</th>
<th>
<?php echo "<p>$num_2</p>"; ?>
</th>
</tr>
</table>
<?php
echo "<p id=\"texto\">Qual a resposta correta?</p>";

$resultado=$num_1*$num_2;


$opcao_1=mt_rand(0,100);
$opcao_2=mt_rand(0,100);
$opcao_3=mt_rand(0,100);

/* Valida as opcoes para nao serem repeditas */
if ( $opcao_1 == $resultado )
{
	$opcao_1=mt_rand(0,100);
}

if ( $opcao_2 == $resultado )
{
	$opcao_2=mt_rand(0,100);
}

if ( $opcao_3 == $resultado )
{
	$opcao_3=mt_rand(0,100);
}

/* Cria prdem para exibicao */
#$ordem=mt_rand(1,4);

$i=1;
$respostas = array ("$resultado", "$opcao_1", "$opcao_2", "$opcao_3");
shuffle($respostas);
foreach ($respostas as $opcao)
{
	if ($opcao == $resultado)
	{
		echo "<div id=\"resposta$i\"><button class=\"b$i\" onclick=\"acertou()\">$resultado</button></div>";
	} else {
		echo "<div id=\"resposta$i\"><button class=\"b$i\" onclick=\"errou()\">$opcao</button></div>";
	}
	$i++;
}

?>
<br>
<br>
<p class="resultadocorreto" id="resultadocorreto"></p>
<p class="resultadoerrado" id="resultadoerrado"></p>

</body>
</html>
