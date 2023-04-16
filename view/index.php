<?php
include ('../model/connector.php');
include ('../model/verification.php');

?>

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
    <a  class="hover:text-gray-300" href="../controller/clientes.php">Ver tabela de cadastrados</a>
</div>
    




