<?php include("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MyTeams / Produtos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/projeto2.css">
        <link rel="stylesheet" type="text/css" href="css/projeto.css">
        <script src = "projeto.js"></script>
    </head>
    <body>
        <header>
            <a href="produtos.html" class="logo">MyTeams</a>
            <nav class="nav_links">
                <li><a href="projeto.html">Início</a></li>
                <li><a href="#">Perfil</a></li>
                <div class="dropdown">
                    <li><a href="#">Produtos</a></li>
                     <div class="dropdown-content">
                         <a><ul>League Of Legends</ul></a>
                         <a><ul>CS:GO</ul></a>
                         <a><ul>World of Warcraft</ul></a>
                         <a><ul>Assinaturas</ul></a>
                     </div>  
                 </div>         
                <li><a href="login.html">Cadastro/Login</a></li>
            </nav>
        </header>
        <nav class="orgprodutos">
            <nav class="filtros">
               <p>penes</p>
            </nav>
            <div class="wrapper">
                <div class="frame">
                    <div class="produto">
                      <img src="produto.png" height="200" width="200">
                    </div>
                   <p>SKIN EXAMPLE</p>
                   <hr>
                   <p>R$999,99</p>
                   <img src="imagens/plus.png" height="20" width="20">
                </div>
            </div>
        </nav>

</body>
</html>