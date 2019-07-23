
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
        background: blue;
        border: none;
        width: 90px;
        float: left;
        }
        #resposta3{
        background: red;
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
        background-color: #4CAF50; /* Green */
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .b2 {
        background-color: blue; /* Green */
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .b3 {
        background-color: red; /* Green */
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .b4 {
        background-color: yellow; /* Green */
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }

</style>
<script>
function errou() {
        document.getElementById("resultadoerrado").innerHTML = "Não foi desta vez... estude mais! Carregando o próximo desafio.";
        setTimeout(function(){
                location.reload();
        }, 2500);
}
function acertou() {
        document.getElementById("resultadocorreto").innerHTML = "Parabéns, você acertou!!! Carregando o próximo desafio.";
        setTimeout(function(){
                location.reload();
        }, 2500);
}
</script>
</script>
<body>
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


echo "<div id=\"resposta1\"><button class=\"b1\" onclick=\"acertou()\">$resultado</button></div>";
echo "<div id=\"resposta2\"><button class=\"b2\" onclick=\"errou()\">$opcao_2</button></div>";
echo "<div id=\"resposta3\"><button class=\"b3\" onclick=\"errou()\">$opcao_1</button></div>";
echo "<div id=\"resposta4\"><button class=\"b4\" onclick=\"errou()\">$opcao_3</button></div>";
?>
<br>
<br>
<p class="resultadocorreto" id="resultadocorreto"></p>
<p class="resultadoerrado" id="resultadoerrado"></p>

<?php

?>
</body>
</html>
