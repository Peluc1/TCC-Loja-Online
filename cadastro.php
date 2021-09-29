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
        <nav class="cadastro">
            <form class="cadastroform" action="cadastrar.php" method="POST">
                <div class="titulo-cadastro">Cadastro</div>
                <div class="detalhes-cadastro">
                    <div class="fullbox ">
                        <p for="email">Nome</p>
                        <input type="nome" name="nome" class="nome" placeholder="Digite o seu nome" required>
                    </div>
                    <div class="fullbox">
                        <p for="email">Sobrenome</p>
                        <input type="sobrenome" name="sobrenome" class="sobrenome" placeholder="Digite o seu sobrenome" required>
                    </div>
                    <div class="fullbox">
                        <p>E-Mail</p>
                        <input type="email" name="email" class="email" placeholder="Digite o seu email" required>
                    </div>
                    <div class="fullbox">
                        <p for="email">CPF</p>
                        <input type="cpf" name="cpf" class="form-control"  onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00" required>
                    </div>
                    <div class="fullbox">
                        <p for="email">Data de nascimento</p>
                        <input type="dtnascimento" name="dtnascimento" class="form-control" onkeypress="$(this).mask('00/00/0000')" placeholder="00/00/0000" required>
                    </div>
                    <div class="fullbox">
                        <p for="email">Telefone</p>
                        <input type="telefone" name="telefone" class="form-control"  onkeypress="$(this).mask('(00) 0000-00009')" placeholder="(00) 0000-00009" required>
                    </div>
                    <div class="fullbox">
                        <p for="password">Senha</p>
                        <input type="password" name="senha" class="password"  placeholder="Digite a sua senha" required>
                    </div>
                    <div class="fullbox">
                        <p for="email">Confirme a sua senha</p>
                        <input type="password" name="senha" class="password" placeholder="Confirme a sua senha" required>
                    </div>
                </div>
                <div class="checkbox-div">
                    <input type="checkbox">
                    <label for="agreement">Eu li e aceito os <a href="#" style="color: #9F0080;">termos de uso</a></label>
                </div>
                <div class="genero-geral">
                    <input type="radio" name="genero" id="dot-1" class="radiobtn-genero" value="Masculino">
                    <input type="radio" name="genero" id="dot-2" class="radiobtn-genero" value="Feminino">
                    <input type="radio" name="genero" id="dot-3" class="radiobtn-genero" value="Outro">
                    <span class="genero-titulo">Gênero</span>
                    <div class="genero-categoria">
                        <label for="dot-1">
                            <label class="dot one"></label>
                            <span class="nenhum">Masculino</span>
                        </label>
                        <label for="dot-2">
                            <label class="dot two"></label>
                            <span class="nenhum">Feminino</span>
                        </label>
                        <label for="dot-3">
                            <label class="dot three"></label>
                            <span class="nenhum">Prefiro não dizer</span>
                        </label>
                    </div>
                </div>
                <div class="cadastro-btn">
                    <input type="submit" value="Realizar o cadastro" class="btncadastro">
                </div>
            </form>
        </nav>
        <footer style="margin-top: 80px;">
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