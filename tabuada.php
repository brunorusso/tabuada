
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
<title>Tabuada do 0 a 10 Completa</title>
</head>
<style>
        p{
        color: black;
        font-family: verdana;
        font-size: 35px;
	text-align: center;
        }
        table {
        background-color: #4CAF50; 
        border: solid;
        color: black;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        font-size: 20px;
        font-family: verdana;
	margin: 4px 2px;
        cursor: pointer;
	font-weight: bold;
        }
	.centerTable { 
	margin: 0px auto; 
	}

</style>
<body bgcolor="#f0f0f0">


<?php
$tabuada = 0;
$contador = 0;

while ($tabuada <= 10)
{
	echo "<p>Tabuada do $tabuada</p>";
	echo "<table class=\"centerTable\">";
	while ($contador <= 10)
	{
		$resultado = $tabuada*$contador;
		echo "<tr><th>$tabuada</th><th>x</th><th>$contador</th><th>=</th><th>$resultado</th></tr>";
		$contador++;
	}
	$tabuada++;
	$contador = 0;
	echo "</table>";
}

?>


<br>
<br>
<center>
<a href="index.php">Faça o teste da Tabuada</a>
<br>
<a href="sobre.html">Sobre este site</a>
</center>
</body>
</html>
