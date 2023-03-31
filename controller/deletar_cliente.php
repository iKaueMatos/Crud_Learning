<?php

    if(isset($_POST['confirm'])){
        include('../model/connector.php');
        $id = intval($_GET['id']);
        $sql_code = "DELETE FROM clientes WHERE id = '$id'";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

        if($sql_query){ ?>
        <h1>Cliente deletado com sucesso!</h1>
            <p><a href="clientes.php">Clique aqui para voltar para lista de clientes</a></p>
        <?php
    }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Deletar cliente</title>
</head>
<body>

<div class="">
    <h1> Tem certea que deseja deletar esse cliente?</h1>
    <button><a href ="clientes.php">Não</a></button>
    <form action="" method="POST">
        <button name="confirm" value="1" type="submit">Sim</button>
    </form>

</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>



