<?php
    include("../model/connector.php");
    include("../model/format.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Tabela de clientes</title>
</head>
<body>
<div class ="">
    <a class="" href="../view/index.php">Voltar para formulario</a>
</div>

<div class="container-table">
    <h1>Lista de clientes</h1>
    <p>Estes são os clientes cadastrados no sistema</p>

    <table border="1" cellpadding="5">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Nascimento</th>
            <th>Data</th>
        </thead>

        <tbody>
        <?php
        $sql_customers = "SELECT * FROM clientes";
        $query_customers = $mysqli->query($sql_customers) or die ($mysqli->error) ;
        $num_customers = $query_customers->num_rows;

        if($num_customers == 0) {?>
            <tr>
                <td colspan = "7" > Nenhum cliente foi cadastrado </td >
            </tr >
        <?php } else{
           while ($customers = $query_customers->fetch_assoc()){
               //verificando se existe um telefone que esta sendo informado para exibi-lo
            $telephone ="Não informado";
               if (!empty($customers['telefone'])){
                   $telephone = format_telephone($customers['telefone']);
               }

               //Verificando se existe uma data de nasicmento que esta snedo informada
               $birth ="Não informada";
               if(!empty($customers['nascimento'])){
                   //Explode e responsavel por dividir nossa array em partes ou pedacinhos
                   $birth= format_date($customers['nascimento']);
               }

               // Strtotime -> ira servir basicamente para inverter converter  o formato da data para segundos timesetep;
               $birth_register = date("d/m/Y",strtotime($customers['DATA']));

            ?>
        <tr class="">
            <td><?php echo $customers['id'];?></td>
            <td><?php echo $customers['nome'];?></td>
            <td><?php echo $customers['email'];?></td>
            <td><?php echo $telephone;?></td>
            <td><?php echo $birth;?></td>
            <td><?php echo $birth_register;?>
                <!--links para edição do cliente-->
            <td>
                <a class ="edit" href="editar_cliente.php?id=<?php echo $customers['id'];?>">Editar</a>
                <a class= "delete" href="deletar_cliente.php?id<?php echo $customers['id'];?>">Deletar</a>
            </td>
        </tr>
        <?php
           }
        }
        ?>


        </tbody>

    </table>



</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>