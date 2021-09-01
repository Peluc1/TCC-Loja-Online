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
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>

    <header>
    <nav class="menuprincipal">
      <div class="navbar" id="navbar">
        <div class="logo"><a href="projeto.php">MyTeams</a></div>
        <div class="nav-links">
          <ul class="links">
            <li><a href="#" class="home2">Home</a></li>
            <li><a href="#" class="home2">Sobre Nós</a></li>
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
        </div>
        <div class="search-box">
          <i class='bx bx-search' ></i>
          <div class="input-box">
            <input type="text" placeholder="O que procura?">
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