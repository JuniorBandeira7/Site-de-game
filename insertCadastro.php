<?php
include("classes/conexao.php");


$nome=$_POST["nome"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$token=bin2hex(random_bytes(64));

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email=:email");
$stmt->execute(['email' => $email]);
$buscaEmail = $stmt->fetch();
$conta = $stmt->rowCount();

if($conta==0){

    $cadastro=[
        'nome' => $nome,
        'email' => $email,
        'senha' => $senha,
    ];

    $stmt= $conn->prepare('INSERT INTO usuarios (nome, email, senha) VALUES(:nome, :email, :senha)');
    $stmt ->execute($cadastro);


    $verificaEmail=[
        'token' => $token,
        'email' => $email,
    ];
    $stmt= $conn->prepare('INSERT INTO confirmation (email, token) VALUES(:email, :token)');
    $stmt ->execute($verificaEmail);
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
    <main>
        <h1 style="color: white;">Email já cadastrado!</h1>
        <div>
            <a   id="botao" href="Cadastro.php" style="margin-top: 20px; display: flex; justify-content: center; align-items: center;">Voltar</a>
        </div>
    </main>
</body>
</html>
<?php
}

?>