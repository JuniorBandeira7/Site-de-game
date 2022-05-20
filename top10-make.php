<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=gamelistdb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/comum.css">
    <link rel="stylesheet" href="Estilo/top10.css">
    <link rel="stylesheet" href="Estilo/top10make.css">
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
    <section>
        <aside id="aside-esquerdo"></aside>
        <main>
            <form action="insertListas.php" method="post" id="form-titulo">
                <input type="text" name="titulo" id="titulo" placeholder="Título" style="margin-bottom: 30px; margin-top: 20px; width: 500px; height: 20px;" class="textos">
                    <textarea name="resumo" id="resumo" cols="30" rows="10" class="textos"></textarea>
                <div id="enviar-box" action="insertListas.php" method="post">
                    <input type="submit" value="Salvar e enviar" id="enviar-boxx" >
                </div>
                <ol>
                    <li class="posiçoes" id="posiçao0">
                        <img alt="" class="img-posiçoes" id="imagem0">
                        <div class="text-container-posiçoes">
                                <select name="jogos0" class="textos" class="select-jogos" onchange="troca0()" id="select-jogos0">
                                    <option value="0"></option>
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                    $stmt->execute();
                                    if ($stmt->rowCount() > 0) {
                                        while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                        }
                                    } else {
                                        echo "erro";
                                    }
                                    ?>
                                </select>
                                <textarea name="comentario-jogo0" id="comentario1" cols="100" rows="10" class="textos"></textarea>
                                </div>
                    </li>
                    <li class="posiçoes" id="posiçao1">
                    <img alt="" class="img-posiçoes" id="imagem1">
                    <div class="text-container-posiçoes">
                            <select name="jogos1" class="textos" class="select-jogos" onchange="troca1()" id="select-jogos1">
                                <option value="0"></option>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                $stmt->execute();

                                if ($stmt->rowCount() > 0) {
                                    while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                    }
                                } else {
                                    echo "erro";
                                }
                                ?>
                            </select>
                            <textarea name="comentario-jogo1" id="comentario1" cols="100" rows="10" class="textos"></textarea>
                    </div>
                </li> 
                <li class="posiçoes" id="posiçao2">
                    <img alt="" class="img-posiçoes" id="imagem2">
                    <div class="text-container-posiçoes">
                            <select name="jogos2" class="textos" class="select-jogos" onchange="troca2()" id="select-jogos2">
                                <option value="0"></option>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                $stmt->execute();

                                if ($stmt->rowCount() > 0) {
                                    while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                    }
                                } else {
                                    echo "erro";
                                }
                                ?>
                            </select>
                            <textarea name="comentario-jogo2" id="comentario1" cols="100" rows="10" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao3">
                    <img alt="" class="img-posiçoes" id="imagem3">
                    <div class="text-container-posiçoes">
                            <select name="jogos3" class="textos" class="select-jogos" onchange="troca3()" id="select-jogos3">
                                <option value="0"></option>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                $stmt->execute();

                                if ($stmt->rowCount() > 0) {
                                    while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                    }
                                } else {
                                    echo "erro";
                                }
                                ?>
                            </select>
                            <textarea name="comentario-jogo3" id="comentario1" cols="100" rows="10" class="textos"></textarea>  
                    </div>
                </li>
                <li class="posiçoes" id="posiçao4">
                    <img alt="" class="img-posiçoes" id="imagem4">
                    <div class="text-container-posiçoes">
                            <select name="jogos4" class="textos" class="select-jogos" onchange="troca4()" id="select-jogos4">
                                <option value="0"></option>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                $stmt->execute();

                                if ($stmt->rowCount() > 0) {
                                    while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                    }
                                } else {
                                    echo "erro";
                                }
                                ?>
                            </select>
                            <textarea name="comentario-jogo4" id="comentario1" cols="100" rows="10" class="textos"></textarea>  
                    </div>
                </li>
                <li class="posiçoes" id="posiçao5">
                    <img alt="" class="img-posiçoes" id="imagem5">
                    <div class="text-container-posiçoes">
                            <select name="jogos5" class="textos" class="select-jogos" onchange="troca5()" id="select-jogos5">
                                <option value="0"></option>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                $stmt->execute();

                                if ($stmt->rowCount() > 0) {
                                    while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                    }
                                } else {
                                    echo "erro";
                                }
                                ?>
                            </select>
                            <textarea name="comentario-jogo5" id="comentario1" cols="100" rows="10" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao6">
                    <img alt="" class="img-posiçoes" id="imagem6">
                    <div class="text-container-posiçoes">
                            <select name="jogos6" class="textos" class="select-jogos" onchange="troca6()" id="select-jogos6">
                                <option value="0"></option>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                $stmt->execute();

                                if ($stmt->rowCount() > 0) {
                                    while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                    }
                                } else {
                                    echo "erro";
                                }
                                ?>
                            </select>
                            <textarea name="comentario-jogo6" id="comentario1" cols="100" rows="10" class="textos"></textarea>   
                    </div>
                </li>
                <li class="posiçoes" id="posiçao7">
                    <img alt="" class="img-posiçoes" id="imagem7">
                    <div class="text-container-posiçoes">
                            <select name="jogos7" class="textos" class="select-jogos" onchange="troca7()" id="select-jogos7">
                                <option value="0"></option>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                $stmt->execute();

                                if ($stmt->rowCount() > 0) {
                                    while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                    }
                                } else {
                                    echo "erro";
                                }
                                ?>
                            </select>
                            <textarea name="comentario-jogo7" id="comentario1" cols="100" rows="10" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao8">
                    <img alt="" class="img-posiçoes" id="imagem8">
                    <div class="text-container-posiçoes">
                            <select name="jogos8" class="textos" class="select-jogos" onchange="troca8()" id="select-jogos8">
                                <option value="0"></option>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                $stmt->execute();

                                if ($stmt->rowCount() > 0) {
                                    while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                    }
                                } else {
                                    echo "erro";
                                }
                                ?>
                            </select>
                            <textarea name="comentario-jogo8" id="comentario1" cols="100" rows="10" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao9">
                    <img alt="" class="img-posiçoes" id="imagem9">
                    <div class="text-container-posiçoes">
                            <select name="jogos9" class="textos" class="select-jogos" onchange="troca9()" id="select-jogos9">
                                <option value="0"></option>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                $stmt->execute();

                                if ($stmt->rowCount() > 0) {
                                    while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                    }
                                } else {
                                    echo "erro";
                                }
                                ?>
                            </select>
                            <textarea name="comentario-jogo9" id="comentario1" cols="100" rows="10" class="textos"></textarea>
                    </div>
                </li>
                </ol> 
            </form>
        </main>
        <aside id="aside-direito">   
        </aside>
    </section>

</body>

</html>
<script>
</script>
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('resumo')
</script>
<script src="script/lista.js"></script>

