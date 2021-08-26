<?php include("conexao.php");

session_start();
if(isset($_SESSION['email'])){
    header('Location: perfil.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MyTeams / Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/projeto.css">
    </head>
    <body>

    <body>
        
        <header>
            <a href="produtos.html" class="logo">MyTeams</a>
            <nav class="pesquisar">
                <input type="text" placeholder="O que procura?">
            </nav>
            <nav class="nav_links">
            <li><a href="login.php"><img src="imagens/carrinho.png" height="40" width="40"></a></li>
            <div class="dropdown" float="right">
                    <li><a href="login.php"><img src="imagens/user.png" height="40" width="40"></a></li>
                     <div class="dropdown-content isright">
                         <a><ul>Login</ul></a>
                         <a><ul>Perfil</ul></a>
                         <a><ul>Salvos</ul></a>
                     </div>  
                 </div>
            </nav>
        </header>

        <nav class="submenu">
            <nav class="nav_links">
                <li><a>Assinaturas</a></li>
                <div class="dropdown">
                    <li><a href="produtos.html">Skins e itens</a></li>
                     <div class="dropdown-content">
                         <a><ul>CS:GO</ul></a>
                     </div>  
                </div>
                <div class="dropdown">
                    <li><a href="produtos.html">Contas</a></li>
                     <div class="dropdown-content">
                         <a><ul>League Of Legends</ul></a>
                         <a><ul>Steam</ul></a>
                         <a><ul>World of Warcraft</ul></a>
                     </div>  
                </div>
                <li><a>Jogos</a></li>   
            </nav>
        </nav>

        <nav class="login">
            <h1>Insira os seus dados cadastrados</h1>
            <form class="loginform" action="logar.php" method="POST">
                <div class="fullbox space">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" class="email" placeholder="Digite o seu email">
                </div>
                <div class="fullbox space">
                    <label for="password">Senha</label>
                    <input type="password" name="password" class="password" placeholder="Digite a sua senha">
                </div>
                <div class="fullbox">
                    <input type="submit" class="btn-submit " value="Realize o login">
                </div>
                <p class="erro-validation template"></p>
                <a href="cadastro.php" style="color:#B181FC;"> <p class="caminhocadastro">Clique aqui caso queira realizar o cadastro</p></a>
                <a href="#" style="color: #B181FC;"><p class="caminhocadastro">Esqueceu a senha?</p></a>
            </form>
        </nav>

        <script src="js/scriptcadastro.js"></script>

        <footer style="margin-top:60px;">
            <div class="social">
              <a href="a" class="ftfooter"><img src="imagens/facebook.png" width="50" height="50"></a>
              <a href="a" class="ftfooter"><img src="imagens/instagram.png" width="50" height="52"></a>
              <a href="a" class="ftfooter"><img src="imagens/twitter.png" width="50" height="50"></a>
             </div>
             <div class="elementfooter">
                 <a href="a" class="textfooter">Suporte</a>
                 <a href="a" class="textfooter">Sobre</a>
                 <a href="a" class="textfooter">Termos de uso</a>
                 <a href="a" class="textfooter">Política de Privacidade</a>
             </div>
             <div class="creditos">
                 <p class="textfooter">© Desenvolvido por Matheus, Pedro e Rafael</p>
             </div>
         </footer>
    </body>
</html>