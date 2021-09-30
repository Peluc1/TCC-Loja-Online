<?php 

require("../app/db/conexao.php");
//var_dump($_SESSION);
  session_start();
if (isset($_SESSION['iduser'])){
    header('Location: ../public/perfil.php');
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
        <div class="logo"><a href="../public/projeto.php">MyTeams</a></div>
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
      <div class="titulo">Login</div>
      <form action="../app/logar.php" method="post" class="form-login">
        <div class="campo-dado">
          <input type="text" name="email"  class="input-login" required>
          <label>Email</label>
        </div>
        <div class="campo-dado">
          <input type="password" name="password" required>
          <label>Senha</label>
        </div>
        <div class="esqueceu-senha"><a href="#">Esqueceu a senha?</a></div>
        <div>
          <input type="submit" value="Fazer login" class="btnlogin">
        </div>
        <div class="cadastro-link">Não é membro?<a href="../public/cadastro.php"> Cadastre-se agora</a></div>
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