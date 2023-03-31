<?php

//Connector banco de dados
include('connector.php');

//Limpar texto
function clear_text($str){
    return preg_replace("/[^0-9]/", "", $str);
}

if(count($_POST) > 0) {
    //Se existir chamao arquivo connector do php
    include('connector.php');

    $erro = false;
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $telephone = $_POST['telefone'];
    $birth = $_POST['nascimento'];

    if (empty($name)) {
        $erro = "Preencha o nome";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Preencha o e-mail";
    }

    if (!empty($birth)) {
        $array = explode('/', $birth);
        if (count($array) == 3) {
            $birth = implode('-', array_reverse($array));
        } else {
            $erro = "A data de nascimento deve seguir o padrão dia/mes/ano.";
        }
    }

    if (!empty($telephone)) {
        //Limpar telefone
        $telephone = clear_text($telephone);
        if (strlen($telephone) != 11)
            $erro = "O telefone deve ser preenchido no padrão (11) 98888-8888";
    }

    if ($erro) {
        echo "<p><b>ERRO:$erro</b></p>";
    } else {
        //Query inserindo dados no banco de dados chamado Empresa
        $sql_code = "INSERT INTO clientes (nome,email,telefone,nascimento,DATA) VALUES
        ('$name','$email','$telephone','$birth',NOW())";
        $dueCerot = $mysqli->query($sql_code) or die ($mysqli->error);
        if ($dueCerot) {
            echo "<p>Cliente cadastrado com sucesso</p>";
            //Função unset -> limpa a variavel
            unset($_POST);
        }
    }
}
?>
