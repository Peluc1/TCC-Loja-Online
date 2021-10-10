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
    <header>
    <nav class="menuprincipal">
      <div class="navbar" id="navbar">
        <div class="logo"><a href="public/index.php">MyTeams</a></div>
        <div class="nav-links pre-ender">
          <ul class="links">
            <li><a href="#" class="home2">Home</a></li>
            <li><a href="produtos.php" class="home2">Produtos</a></li>
            <li><a href="#" class="home2">Sobre Nós</a></li>
          </ul>
        </div>

        <div class="nav-links ender">
            <ul class="links">
                <li>
                    <i class='bx bx-user-circle'></i>
                    <ul class="perfilsubmenu submenuprincipal">
                        <li><a href="#">Login</li></a>
                        <li><a href="public/perfil.php">Perfil</li></a>
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
          <div class="google-principal">
            <div class="google-login">
                      <div id="g_id_onload"
                          data-client_id="1071753740576-sqluvverdjcg3n5vkoslgiql0s8qil0s.apps.googleusercontent.com"
                          data-context="signin"
                          data-ux_mode="popup"
                          data-login_uri="http://localhost/TCC/app/google_logar.php"
                          data-auto_prompt="false"
                          style="transform: scale(1);">
                      </div>

                      <div class="g_id_signin"
                          data-type="standard"
                          data-shape="pill"
                          data-theme="outline"
                          data-text="signin_with"
                          data-size="large"
                          data-logo_alignment="left"
                          style="transform: scale(1);">
                      </div>
                </div>
          </div>
        </nav>
          <script src="https://accounts.google.com/gsi/client" async defer></script>
          <script src="js/scriptcadastro.js"></script>
    </body>
</html>