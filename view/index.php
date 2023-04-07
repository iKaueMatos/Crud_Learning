<?php
include ('../model/connector.php');
include ('../model/verification.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sass/main.css">
    <link rel="stylesheet" href="../dist/style.css">
    <script src="./js/jquery.js"></script>
    <title>Cadastrar Cliente</title>
</head>
<body class="bg-black-300 h-screen">


<nav class="p-5 bg-black shadow md:flex md:items-center md:justify-between backdrop-blur-lg">
    <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Arial] cursor-pointer">
        <h1 class="text-white text-lg text-bold">Logo</h1>
      </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-black w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class=" text-white text-xl hover:text-cyan-500 duration-600">Inicio</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class=" text-white text-xl hover:text-cyan-500 duration-600">Serviços</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class=" text-white text-xl hover:text-cyan-500 duration-600">Sobre</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class=" text-white text-xl hover:text-cyan-500 duration-600">Contato</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-white text-xl hover:text-cyan-500 duration-600">Portfólio</a>
      </li>

      <button class="bg-cyan-400 text-white font-[Arial] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        <a href="login.php">Sign in </a></a>
      </button>
      <h2 class=""></h2>
    </ul>
  </nav>
  
<!---carrosel-->





<!---fim do carrosel-->



<!--Form-->
<div class ="">
    <div class="grid">
        <div class="">
        <form method="POST" action="">
            <div class="">
                <label>Nome:</label>
                <input  class="outline-black" placeholder="Digite seu nome" name="nome" type="text">
            </div>
            <div class="group-input">
                <label>E-mail:</label>
                <input class="outline-zinc-950" placeholder="Digite seu E-mail" name="email" type="text">
            </div>
            <div class="group-input">
                <label>Telefone:</label>
                <input  class="outline-zinc-950"  placeholder="(11) 98888-8888" name="telefone" type="text">
            </div>
            <div class="group-input">
                <label>Data de Nascimento:</label>
                <input  name="nascimento" type="text">
            </div>

            <div class="button">
                <button type="submit">Salvar Cliente</button>
            </div>
        </div>
    </div>
</div>
</form>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="link-toGoBack">
            <a  class="hover:text-gray-300" href="../controller/clientes.php">Ver tabela de cadastrados</a>
        </div>
    </div>
</div>


<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.6.4.js"
 integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>
</html>

