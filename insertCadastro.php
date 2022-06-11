<?php
include("classes/conmsqli.php");


$nome=$_POST["nome"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$token=bin2hex(random_bytes(64));
//id, nome, email, senha, avatar, nivel de acesso(1 para admin, 2 para usuario comum), status de confirmação de email(0= a confirmar, 1=confirmado)
$sql="INSERT INTO usuarios values (NULL, '$nome', '$email', '$senha', NULL, '2', '0')";
$resultado=mysqli_query($con, $sql);
$linhas=mysqli_affected_rows($con);

$sql="INSERT INTO confirmation values (NULL, '$email', '$token')";
$resultado=mysqli_query($con, $sql);
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