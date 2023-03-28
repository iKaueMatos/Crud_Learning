<?php
include "../model/connector.php";
include "../model/verification.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Cadastrar Cliente</title>
</head>
<body>
<div class="">
    <a href="clientes.php">Ver tabela de cadastrados</a>
</div>

<div class ="container">
    <form method="POST" action="">
        <div class="group-input">
            <label>Nome:</label>
            <input  name="nome" type="text">
        </div>
        <div class="group-input">
            <label>E-mail:</label>
            <input  name="email" type="text">
        </div>
        <div class="group-input">
            <label>Telefone:</label>
            <input   placeholder="(11) 98888-8888" name="telefone" type="text">
        </div>
        <div class="group-input">
            <label>Data de Nascimento:</label>
            <input  name="nascimento" type="text">
        </div>

        <div class="button">
            <button type="submit">Salvar Cliente</button>
        </div>

</form>
</div>
</body>
</html>

