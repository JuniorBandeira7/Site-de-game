<?php
include("conexao.php");

$email=$_POST["email"];
$senha=$_POST["senha"];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email=:email");
$stmt->execute(['email' => $email]);
$buscaEmail = $stmt->fetch();
$conta = $stmt->rowCount();

if($conta!=0){

    $stmt = $conn ->prepare("SELECT * FROM usuarios WHERE email=:email");
    $stmt->execute(['email' => $email]);
    $verificas = $stmt->fetchAll();
    foreach($verificas as $verifica);
    
    if (password_verify($senha, $verifica['senha'])) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }


}else{
    ?>
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
            <h1 style="color: white;">Email não cadastrado!</h1>
            <div>
                <a   id="botao" href="../logar.php" style="margin-top: 20px; display: flex; justify-content: center; align-items: center;">Voltar</a>
            </div>
        </main>
    </div>
</body>
</html>
<?php
}

?>