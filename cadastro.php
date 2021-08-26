<?php include("conexao.php");
session_start();
if(isset($_SESSION['email'])){
header('Location: perfil.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MyTeams / Cadastro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/projeto.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
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

        <nav class="cadastro">
            <h1>Insira os seus dados para se cadastrar</h1>
            <form class="cadastroform" action="cadastrar.php" method="POST">
                <div class="fullbox space">
                    <label for="email">Nome</label>
                    <input type="nome" name="nome" class="nome" placeholder="Digite o seu nome">
                </div>
                <div class="fullbox space">
                    <label for="email">Sobrenome</label>
                    <input type="sobrenome" name="sobrenome" class="sobrenome" placeholder="Digite o seu sobrenome">
                </div>
                <div class="fullbox space">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" class="email" placeholder="Digite o seu email">
                </div>
                <div class="half-box space">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" class="password" placeholder="Digite a sua senha">
                </div>
                <div class="half-box space">
                    <label for="email">Confirme a sua senha</label>
                    <input type="password" name="senha" class="password" placeholder="Digite a sua senha">
                </div>
                <div class="fullbox space">
                    <label for="email">CPF</label>
                    <input type="cpf" name="cpf" class="form-control"  onkeypress="$(this).mask('000.000.000-00');" placeholder="Ex.: 000.000.000-00">
                </div>
                <div class="fullbox space">
                    <label for="email">Data de nascimento</label>
                    <input type="dtnascimento" name="dtnascimento" class="form-control" onkeypress="$(this).mask('00/00/0000')" placeholder="Digite a sua data de nascimento">
                </div>
                <div class="fullbox space">
                    <label for="email">Telefone</label>
                    <input type="telefone" name="telefone" class="form-control"  onkeypress="$(this).mask('(00) 0000-00009')" placeholder="Digite o seu numero de telefone">
                </div>
                <div class="fullbox">
                    <input type="checkbox" name="agreement" class="agreement">
                    <label for="agreement" class="agreement-label">Eu li e aceito os <a href="#" style="color: #9F0080;">termos de uso</a></label>
                </div>
                <div class="fullbox">
                    <input type="submit" class="btn-submit " value="Realizar o cadastro">
                </div>
                <p class="erro-validation template"></p>
            </form>
        </nav>
        <script src="js/scriptcadastro.js"></script>

        <footer>
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