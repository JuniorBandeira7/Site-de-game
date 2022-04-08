<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=gamelistdb", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
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
            <div id="logo-container">
                <h1 id="logo">Logo</h1>
            </div>
        </div>
        <div id="main-header-nav-container">
            <nav id="main-header-nav">
                <ul id="main-header-nav-ul">
                    <li><a href="">Home</a></li>
                    <li><a href="">Listas</a></li>
                    <li><a href="">Notícias</a></li>
                </ul>
                <h1 id="nada-por-enquanto"></h1>
            </nav>
        </div>
    </header>
    <section>
        <aside id="propaganda"></aside>
        <main>
            <input type="text" name="titulo" id="titulo" placeholder="Título" style="margin-bottom: 30px; margin-top: 20px; width: 500px; height: 20px;" class="textos">
            <textarea name="comentario" id="" cols="30" rows="10" class="textos"></textarea>
            <ol>
                <li class="posiçoes" id="posiçao0">
                        <img alt="" class="img-posiçoes" id="imagem0">
                        <div class="text-container-posiçoes">
                            <form method="post" action="">
                                <select name="jogos" class="textos" class="select-jogos" onchange="troca0()" id="select-jogos0">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                                </select>
                            </form>
                            <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                        </div>
                </li>
                <li class="posiçoes" id="posiçao1">
                    <img alt="" class="img-posiçoes" id="imagem1">
                    <div class="text-container-posiçoes">
                        <form method="post" action="">
                            <select name="jogos" class="textos" class="select-jogos" onchange="troca1()" id="select-jogos1">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                            </select>
                        </form>
                        <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao2">
                    <img alt="" class="img-posiçoes" id="imagem2">
                    <div class="text-container-posiçoes">
                        <form method="post" action="">
                            <select name="jogos" class="textos" class="select-jogos" onchange="troca2()" id="select-jogos2">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                            </select>
                        </form> 
                        <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao3">
                    <img alt="" class="img-posiçoes" id="imagem3">
                    <div class="text-container-posiçoes">
                        <form method="post" action="">
                            <select name="jogos" class="textos" class="select-jogos" onchange="troca3()" id="select-jogos3">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                            </select>
                        </form>
                    <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao4">
                    <img alt="" class="img-posiçoes" id="imagem4">
                    <div class="text-container-posiçoes">
                    <form method="post" action="">
                        <select name="jogos" class="textos" class="select-jogos" onchange="troca4()" id="select-jogos4">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                        </select>
                    </form>
                    <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao5">
                    <img alt="" class="img-posiçoes" id="imagem5">
                    <div class="text-container-posiçoes">
                    <form method="post" action="">
                        <select name="jogos" class="textos" class="select-jogos" onchange="troca5()" id="select-jogos5">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                        </select>
                    </form>
                    <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao6">
                    <img alt="" class="img-posiçoes" id="imagem6">
                    <div class="text-container-posiçoes">
                    <form method="post" action="">
                        <select name="jogos" class="textos" class="select-jogos" onchange="troca6()" id="select-jogos6">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                        </select>
                    </form>
                    <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao7">
                    <img alt="" class="img-posiçoes" id="imagem7">
                    <div class="text-container-posiçoes">
                    <form method="post" action="">
                        <select name="jogos" class="textos" class="select-jogos" onchange="troca7()" id="select-jogos7">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                        </select>
                    </form>
                    <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao8">
                    <img alt="" class="img-posiçoes" id="imagem8">
                    <div class="text-container-posiçoes">
                    <form method="post" action="">
                        <select name="jogos" class="textos" class="select-jogos" onchange="troca8()" id="select-jogos8">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                        </select>
                    </form>
                    <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                    </div>
                </li>
                <li class="posiçoes" id="posiçao9">
                    <img alt="" class="img-posiçoes" id="imagem9">
                    <div class="text-container-posiçoes">
                    <form method="post" action="">
                        <select name="jogos" class="textos" class="select-jogos" onchange="troca9()" id="select-jogos9">
                                    <?php
                                        $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
                                        $stmt->execute();

                                        if($stmt->rowCount() > 0){
                                            while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                                                echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
                                            }
                                        }else{
                                            echo "erro";
                                        }
                                    ?>
                        </select>
                    </form>
                    <textarea name="comentario-jogo" id="comentario1" cols="100" rows="5" class="textos"></textarea>
                    </div>
                </li>
    </ol>
        </main>
        <aside id="ainda-nada"></aside>
    </section>
    
</body>
</html>
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('comentario')
</script>
<script src="script/lista.js"></script>