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
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>

    <body>
        
    <header>
    <nav class="menuprincipal">
      <div class="navbar" id="navbar">
        <div class="logo"><a href="projeto.php">MyTeams</a></div>
        <div class="nav-links pre-ender">
          <ul class="links">
            <li><a href="#" class="home2">Home</a></li>
            <li><a href="#" class="home2">Sobre Nós</a></li>
          </ul>
        </div>

        <div class="nav-links ender">

            <ul class="links">
                <li>
                    <i class='bx bx-user-circle'></i>
                    <ul class="perfilsubmenu submenuprincipal">
                        <li><a href="#">Login</li></a>
                        <li><a href="#">Perfil</li></a>
                    </ul>
                </li>
                <li>
                    <i class='bx bx-cart' ></i>
                </li>
            </ul>
        

            <div class="search-box">
                <i class='bx bx-search' ></i>
                <div class="input-box pesquisar">
                    <input type="text" placeholder="O que procura?">
                </div>
            </div>
        </div>
      </div>
    </nav>
  </header>
  <nav class="submenu" id="submenu">
    <div class="navbar">
      <div class="nav-links">
        <ul class="links">
          <li>
            <a href="#" class="home2">Assinaturas</a>
            <i class='bx bx-up-arrow-alt arrow assinaturasarrow' ></i>
            <ul class="perfilsubmenu submenuprincipal">
                <li><a href="#">Netflix</li></a>
                <li><a href="#">Disney+</li></a>
              </ul>
          </li>
          <li>
            <a href="#" class="home2">Skins e itens</a>
            <i class='bx bx-up-arrow-alt arrow skinsitensarrow' ></i>
            <ul class="perfilsubmenu submenuprincipal">
                <li><a href="#">Netflix</li></a>
                <li><a href="#">Disney+</li></a>
              </ul>
          </li>
          <li>
            <a href="#" class="home2">Contas</a>
            <i class='bx bx-up-arrow-alt arrow contasarrow' ></i>
            <ul class="perfilsubmenu submenuprincipal">
                <li><a href="#">Netflix</li></a>
                <li><a href="#">Disney+</li></a>
              </ul>
          </li>
          <li>
            <a href="#" class="home2">Jogos</a>
            <i class='bx bx-up-arrow-alt arrow jogosarrow' ></i>
            <ul class="perfilsubmenu submenuprincipal">
                <li><a href="#">Netflix</li></a>
                <li><a href="#">Disney+</li></a>
              </ul>
          </li>
        </ul>
      </div>
    </div>
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
         <script src="js/scriptmenu.js"></script>
    </body>
</html>