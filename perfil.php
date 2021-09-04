<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location: login.php');
}
include_once 'conexao.php';
$sql = $conexao->prepare("SELECT * FROM loja.usuario where email = ?");
$sql->bindParam(1, $_SESSION['email']);

$result = $sql->execute();
$user  = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
 <head>
    <title>MyTeams / Perfil</title>
    <link rel="stylesheet" href="css/projeto.css?v=<?php echo time(); ?>">
    <link rel="sortcut icon" href="imagens/logo.jpeg" type="image/x-icon" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="js/scriptdiv.js" defer></script>
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
      <div class="sidebar" id="sidebar">
        <div>
          <i class='bx bx-menu' id="btn"></i>
        </div>
          <ul>
            <hr>
            <li>
              <a>
              <i class='bx bxs-user' id="action-dados"></i>
              <span class="links-name" id="action-dados">Dados</span>
              </a>
              <span class="tooltip">Dados</span>
            </li>
            <li>
              <a>
              <i class='bx bxs-basket'></i>
              <span class="links-name">Compras</span>
              </a>
              <span class="tooltip">Compras</span>
            </li>
            <li>
              <a>
              <i class='bx bxs-shopping-bag' ></i>
              <span class="links-name">Vendas</span>
              </a>
              <span class="tooltip">Vendas</span>
            </li>
            <li>
              <a>
              <i class='bx bxs-store-alt' ></i>
              <span class="links-name">Anuncie aqui</span>
              </a>
              <span class="tooltip">Anuncie aqui</span>
            </li>
            <li>
              <a href="logout.php">
              <i class='bx bxs-door-open'></i>
              <span class="links-name">Sair</span>
              </a>
              <span class="tooltip">Sair</span>
            </li>
          </ul>
      </div>

      <nav class="dadospessoais" id="dadospessoais">
        <div class="container">
          <div class="titulodados">Dados</div>
            <form>
              <div class="user-detalhes">
                <div class="textinput">
                  <span class="detalhe">Nome</span>
                  <label class="dados"> <?php echo $user["nome"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Sobrenome</span>
                  <label class="dados"> <?php echo $user["sobrenome"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Email:</span>
                  <label  class="dados"> <?php echo $user["email"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">CPF:</span>
                  <label  class="dados">  <?php echo $user["cpf"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Telefone:</span>
                  <label  class="dados">  <?php echo $user["telefone"]; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Data de nascimento:</span>
                  <label  class="dados">  <?php echo $user["dtnascimento"]; ?></label>
                </div>
              </div>
            </form>
            <div class="titulodados">Endereço</div>
              <div class="endereco">
                <div class="subtituloendereco">Endereço Principal</div>
                <div>
                    <label>Bauru, SP</label>
                </div>
                <div>
                    <label>Rua: Alfredo Ruiz</label>
                </div>
                <div>
                    <label>Numero: 10-70</label>
                </div>
                <div>
                    <label>CEP: 17014-350</label>
                </div>
                <div>
                    <label>Bairro: Vila Mesquita</label>
                </div>
                <div class="edit">
                  <a href="#"><div>EDITAR</div></a>
                </div>
              </div>
        </div>
      </nav>
      <nav class="compras">
        <div class="titulo-compras"><i class='bx bxs-basket' ></i>Minhas compras</div>
        <div class="compras-section">
          <div class="numero-pedido">
            <span>Número do pedido</span>
            <span>#355387</span>
          </div>
          <div class="status">
            <span>Status</span>
            <span class="status-aprov">Aprovado</span>
          </div>
          <div class="data">
            <span>Data</span>
            <span>12/01/2021</span>
          </div>
          <div class="pagamento">
            <span>Pagamento</span>
            <span>Boleto</span>
          </div>
          <div class="nf-e">
            <span>NF-E</span>
            <span><i class='bx bxs-notepad' ></i></span>
          </div>
        </div>
        <div class="compras-section">
          <div class="numero-pedido">
            <span>Número do pedido</span>
            <span>#355387</span>
          </div>
          <div class="status">
            <span>Status</span>
            <span class="status-aprov">Aprovado</span>
          </div>
          <div class="data">
            <span>Data</span>
            <span>12/01/2021</span>
          </div>
          <div class="pagamento">
            <span>Pagamento</span>
            <span>Boleto</span>
          </div>
          <div class="nf-e">
            <span>NF-E</span>
            <span><i class='bx bxs-notepad' ></i></span>
          </div>
        </div>
        <div class="compras-section">
          <div class="numero-pedido">
            <span>Número do pedido</span>
            <span>#355387</span>
          </div>
          <div class="status">
            <span>Status</span>
            <span class="status-aprov">Aprovado</span>
          </div>
          <div class="data">
            <span>Data</span>
            <span>12/01/2021</span>
          </div>
          <div class="pagamento">
            <span>Pagamento</span>
            <span>Boleto</span>
          </div>
          <div class="nf-e">
            <span>NF-E</span>
            <span><i class='bx bxs-notepad' ></i></span>
          </div>
        </div>
        <div class="compras-section">
          <div class="numero-pedido">
            <span>Número do pedido</span>
            <span>#355387</span>
          </div>
          <div class="status">
            <span>Status</span>
            <span class="status-recused">Recusado</span>
          </div>
          <div class="data">
            <span>Data</span>
            <span>12/01/2021</span>
          </div>
          <div class="pagamento">
            <span>Pagamento</span>
            <span>Boleto</span>
          </div>
          <div class="nf-e">
            <span>NF-E</span>
            <span><i class='bx bxs-notepad' ></i></span>
          </div>
        </div>
      </nav>
      <nav class="vendas">
        <div class="titulo-vendas"><i class='bx bxs-shopping-bag' ></i>Minha vendas</div>
        <div class="vendas-section">
          <div class="numero-venda">
              <span>Número da venda</span>
              <span>#355387</span>
            </div>
            <div class="status">
              <span>Status</span>
              <span class="status-pendente">Pendente</span>
            </div>
            <div class="data">
              <span>Data</span>
              <span>12/01/2021</span>
            </div>
            <div class="pagamento">
              <span>Pagamento</span>
              <span>Boleto</span>
            </div>
            <div class="comprador">
              <span>Comprador</span>
              <span><i class='bx bxs-user'></i></span>
            </div>
          </div>
          <div class="vendas-section">
          <div class="numero-venda">
              <span>Número da venda</span>
              <span>#355387</span>
            </div>
            <div class="status">
              <span>Status</span>
              <span class="status-pendente">Pendente</span>
            </div>
            <div class="data">
              <span>Data</span>
              <span>12/01/2021</span>
            </div>
            <div class="pagamento">
              <span>Pagamento</span>
              <span>Boleto</span>
            </div>
            <div class="comprador">
              <span>Comprador</span>
              <span><i class='bx bxs-user'></i></span>
            </div>
          </div>
        </div>
      </nav>
      <nav class="anuncios">
        
      </nav>
  <footer style="margin-top: 45px;">
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
  <script>
    let navheight = document.getElementById("navbar").offsetHeight;
    let subheight = document.getElementById("submenu").offsetHeight;
    let firstheight = navheight + subheight;

    let sideMenu = document.getElementById("sidebar");
    sideMenu.style.top = firstheight;
    console.log(navheight)
    console.log(subheight)
    console.log(firstheight);

    var lastScroll = 0;

    document.addEventListener('scroll', () => {
    let st = window.pageYOffset || document.documentElement.scrollTop;
    if(st > lastScroll) {
        navheight = document.getElementById("navbar").clientHeight;
        subheight = document.getElementById("submenu").clientHeight;
        sec = firstheight-(navheight + subheight);

        sideMenu.style.top = sec;

    }else{

        sideMenu.style.top = firstheight;
    }

    })

    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
      sidebar.classList.toggle("o")
    }
  </script>
  <script src="js/scriptmenu.js"></script>
</body>
</html>