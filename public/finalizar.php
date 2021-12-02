<?php
require('../app/db/conexao.php');

session_start();

if(!isset($_SESSION['iduser'])){
    header("location: login.php");
}

$page_title = 'MyTeams / Finalizar';

$links = ['<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>',
        '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>',
        '<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">',
        '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>',
        '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>'];

require('includes/header.php');

?>
<div class="finalizar-container">
    <div class="status-finalizado">
        <div class="titulo-status-finalizado">Pedido realizado com sucesso</div>
        <div class="subtitulo-status-finalizado">Agora é só realizar o pagamento</div>
    </div>
    <div class="finalizacao-info-pedido">
        <div class="info-numero-pedido">
            <p>Numero do pedido </p>
            <hr>
            <p>#333333</p>
        </div>
        <div class="info-opcao-pagamento">
            <p>Forma de pagamento</p>
            <hr>
            <p>Boleto</p>
        </div>
    </div>
    <div class="button-finalizacao">
        <a><div class="button-visualizar-boleto">Visualizar e imprimir boleto</div></a>
    </div>
</div>