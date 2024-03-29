<?php

include("Configuração/config.php");
include(DIRREQ."biblioteca/vendor/autoload.php");

use Traits\TraitParseUrl;


?>
<!DOCTYPE html>
<html lang="pt-br">
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
            <h1 id="logo">Logo</h1>
            <ul id="menu-usuario">
                <li>
                    <img id="avatar" src="" alt="">
                    <ul id="avatar-drop">
                        <li><a href="">Configurações</a></li>
                        <li><a href="">Minhas listas</a></li>
                        <li><a href="">Sair</a></li>
                    </ul>
                </li>
                <a id="notific" href=""><img src="Estilo/Icones/bell-ring.png" alt=""></a>
            </ul>  
    </div>
        <div id="main-header-nav-container">
            <nav id="main-header-nav">
                <ul id="main-header-nav-ul">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <p href="" id="header-a-listas">Listas</p>
                        <ul id="div">
                            <li><a href="top10.php">Lista dos usuários</a></li>
                            <li><a href="top10-make.php">Criar lista</a></li>
                        </ul>
                    </li>
                    <li><a href="">Notícias</a></li>
                </ul>
                <h1 id="nada-por-enquanto"></h1>
            </nav>
        </div>
    </header>
</body>
</html>
