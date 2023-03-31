<?php

include('../model/connector.php');
include("../model/format.php");
//consulta para banco de dados
$id = intval($_GET['id']);
//Selecionando a tabela do banco de dados
$sql_customers = "SELECT * FROM clientes WHERE id = '$id'";
//Verificando se existe algum erro
$query_customers = $mysqli->query($sql_customers) or die($mysqli->error);
$customers = $query_customers->fetch_assoc();
function clear_text($str){
    return preg_replace("/[^0-9]/", "", $str);
}

if(count($_POST) > 0) {

    include('../model/connector.php');

    $erro = false;
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $telephone = $_POST['telefone'];
    $birth = $_POST['nascimento'];

    if(empty($name)) {
        $erro = "Preencha o nome";
    }
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Preencha o e-mail";
    }

    if(!empty($birth)) {
        $array = explode('/', $birth);
        if(count($array) == 3) {
            $birth = implode ('-', array_reverse($array));
        } else {
            $erro = "A data de nascimento deve seguir o padrão dia/mes/ano.";
        }
    }

    if(!empty($telephone)) {
        $telephone = clear_text($telephone);
        if(strlen($telephone) != 11)
            $erro = "O telefone deve ser preenchido no padrão (11) 98888-8888";
    }

    if($erro) {
        echo "<p><b>ERRO: $erro</b></p>";
    } else {
//Atualizando os dados na parte de cliente
        $sql_customers = "UPDATE clientes 
                    SET nome ='$name',
                    email='$email',
                    telefone = '$telephone',
                    nascimento = '$birth'
                     WHERE id='$id'";
        $dueCerot = $mysqli->query($sql_customers) or die ($mysqli->error);
        if($dueCerot){
            echo "<p> Cliente atualizado com sucesso</p>";
            unset($_POST);
        }
        }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Cadastrar Cliente</title>
</head>
<body>
    
<a href="clientes.php">Voltar para a lista</a>
    <form method="POST" action="">
        <p>
            <label>Nome:</label>
            <!--Nesse codigo PHP estamos trazendo o mesmo dado do cliente que era mostrada la na tabela de usuarios cadastrados consequentemente
            podemos altera-los.-->
            <input value="<?php echo $customers['nome']; ?>" name="nome" type="text">
        </p>
        <p>
            <label>E-mail:</label>
            <input value="<?php echo $customers['email']; ?>" name="email" type="text">
        </p>
        <p>
            <label>Telefone:</label>
            <input value="<?php if(!empty($customers['telefone'])) echo format_telephone($customers['telefone']); ?>"  placeholder="(11) 98888-8888" name="telefone" type="text">
        </p>
        <p>
            <label>Data de Nascimento:</label>
            <input value="<?php if (!empty($customers['nascimento'])) echo format_date($customers['nascimento']); ?>"  placeholder="00/00/0000" name="nascimento" type="text">
        </p>
        <p>
            <button type="submit">Salvar Cliente</button>
        </p>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>