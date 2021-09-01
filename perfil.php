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
      <div class="sidebar" id="sidebar">
        <div>
          <i class='bx bx-menu' id="btn"></i>
        </div>
          <ul>
            <hr>
            <li>
              <a>
              <i class='bx bxs-user'></i>
              <span class="links-name">Dados</span>
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
              <span class="links-name">Anuncios</span>
              </a>
              <span class="tooltip">Anuncios</span>
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
  <footer style="margin-top: 10000px;">
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


    let inputbox = document.querySelector(".input-box");
    let searchBox = document.querySelector(".search-box .bx-search");

    searchBox.addEventListener("click", ()=>{
    inputbox.classList.toggle("showInput");
    })

    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
      sidebar.classList.toggle("o")
    }
  </script>
</body>
</html>