<?php

     $con=mysqli_connect("localhost","root","");
     mysqli_select_db($con,"gamelistdb");


$titulo=$_POST["titulo"];
$resumo=$_POST["resumo"];
$jogos0=$_POST["jogos0"];
$comentarioJogos0=$_POST["comentario-jogo0"];
$jogos1=$_POST["jogos1"];
$comentarioJogos1=$_POST["comentario-jogo1"];
$jogos2=$_POST["jogos2"];
$comentarioJogos2=$_POST["comentario-jogo2"];
$jogos3=$_POST["jogos3"];
$comentarioJogos3=$_POST["comentario-jogo3"];
$jogos4=$_POST["jogos4"];
$comentarioJogos4=$_POST["comentario-jogo4"];
$jogos5=$_POST["jogos5"];
$comentarioJogos5=$_POST["comentario-jogo5"];
$jogos6=$_POST["jogos6"];
$comentarioJogos6=$_POST["comentario-jogo6"];
$jogos7=$_POST["jogos7"];
$comentarioJogos7=$_POST["comentario-jogo7"];
$jogos8=$_POST["jogos8"];
$comentarioJogos8=$_POST["comentario-jogo8"];
$jogos9=$_POST["jogos9"];
$comentarioJogos9=$_POST["comentario-jogo9"];

$sql="INSERT INTO listas values (NULL, '$titulo', '$resumo', NULL, '$jogos0', '$comentarioJogos0', '$jogos1', '$comentarioJogos1', '$jogos2', '$comentarioJogos2', '$jogos3', '$comentarioJogos3', '$jogos4', '$comentarioJogos4', '$jogos5', '$comentarioJogos5', '$jogos6', '$comentarioJogos6', '$jogos7', '$comentarioJogos7', '$jogos8', '$comentarioJogos8', '$jogos9', '$comentarioJogos9')";
$resultado=mysqli_query($con, $sql);
$linhas=mysqli_affected_rows($con);

if($linhas == 1){ ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Estilo/index.css">
        <link rel="stylesheet" href="Estilo/comum.css">
        <title>Document</title>
    </head>
    <body>
        <header id="main-header">
            <div id="main-header-logo-container">
                <div id="logo-container">
                    <h1 id="logo">Logo</h1>
                </div>
            </div>
            <div id="main-header-nav-container">
                <nav id="main-header-nav">
                    <ul id="main-header-nav-ul">
                        <li><a href="index.php">Home</a></li>
                        <li>
                            <p href="" id="header-a-listas">Listas</p>
                            <ul id="div">
                                <li><a href="top10.html">Lista dos usuários</a></li>
                                <li><a href="top10-make.php">Criar lista</a></li>
                            </ul>
                        </li>
                        <li><a href="">Notícias</a></li>
                    </ul>
                    <h1 id="nada-por-enquanto"></h1>
                </nav>
            </div>
        </header>
        <script>
            alert("Alterado com sucesso!")
        </script>
    </body>
    </html>

<?php
    
}else{
    echo "erro<br/>";
}

 mysqli_close($con);
?>