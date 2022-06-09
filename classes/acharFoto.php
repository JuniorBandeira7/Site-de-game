<?php
    $stmt = $conn->prepare("SELECT * FROM jogos ORDER BY nome ASC");
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='{$dados['id']}'>{$dados['nome']}</option>";
        }
    }else{
        echo "erro";
    }
?>