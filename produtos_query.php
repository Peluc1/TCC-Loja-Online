<?php

include("conexao.php");

if (isset($_POST['filtros'])) { 
    return buscarFiltros(); 
} 
else { 
    return buscarTodos(); 
}


function buscarTodos() {
    $sql = $conexao->prepare("SELECT * FROM loja.produtos");

    $result = $sql->execute();
    return $sql->fetchAll();

}

function buscarFiltros() { // preço, tipo

}




?>