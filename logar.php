<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/comum.css">
    <link rel="stylesheet" href="Estilo/logar.css">
    <title>Document</title>
</head>
<body>
    <div id="tudo">
        <main>
            <a href="index.php" id="logo-loguin">LOGO</a>
            <form id="section-div" action="classes/loguin.php" method="post">
                <label for="">Email</label>
                <input id="escrever" type="email" name="email" id="" value="" />
                <label for="">Senha</label>
                <input id="escrever" type="password" name="senha" id="" value="" />
                <div id="divbotao">
                    <input type="submit" name="botao" id="botao" value="Entrar" />
                    <input type="button" name="botao" id="botao" value="Cadastrar" />
                </div>
                <a href="">Esqueci minha senha</a>
            </form>
        </main>
    </div>
</body>
</html>
