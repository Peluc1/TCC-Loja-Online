<?php 

require("../app/db/conexao.php");

session_start();
if (isset($_SESSION['iduser'])){
    header('Location: ../public/perfil.php');
    }

  $page_title = 'MyTeams / Login';
  $links = ['<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>',
          '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>',
          '<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">',
          '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>',
          '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>'];
  require('includes/header.php');
?>

    <nav class="login">
      <div class="titulo">Login</div>
      <?php
          if(isset($_GET['error'])){
            echo '<div class="error_notice">Sua senha ou email estão inválidos</div>';
        } 
      ?>
      <form action="../app/logar.php" method="post" class="form-login">
        <div class="campo-dado">
          <input type="email" name="email"  class="input-login" required>
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
<?php
require('includes/footer.php');
?>