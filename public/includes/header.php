<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title><?=$page_title?></title>
      <meta charset="UTF-8">
      <link rel="sortcut icon" href="<?=URLROOT?>/public/imagens/icons/logo.jpeg" type="image/x-icon" />
      <link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/projeto.css">
      <link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/forms.css">
      <?php
          foreach($links as $src) {
              echo $src;
          }
      ?>
  </head>
  <body>
  <header>
    <nav class="menuprincipal">
      <div class="navbar" id="navbar">
        <div class="logo"><a href="<?=URLROOT?>/index.php">MyTeams</a></div>
        <div class="nav-links pre-ender">
          <ul class="links">
            <li><a href="<?=URLROOT?>/index.php" class="home2">Home</a></li>
            <li><a href="<?=URLROOT?>/public/produtos.php" class="home2">Produtos</a></li>
            <li><a href="<?=URLROOT?>/public/about.php" class="home2">Sobre Nós</a></li>
          </ul>
        </div>

          <div class="nav-links ender">
            <ul class="links">
                <li class="perfil-li">
                  <i class='bx bx-user-circle'></i>
                  <ul class="perfilsubmenu submenuprincipal">
                      <li><a href="<?=URLROOT?>/public/login.php">Login</li></a>
                      <li><a href="<?=URLROOT?>/public/perfil.php">Perfil</li></a>
                  </ul>
                </li>
            </ul>
            <div class="search-box">
              <i class='bx bx-search' ></i>
              <div class="input-box pesquisar">
                <input type="text" id="pesquisar" placeholder="O que procura?">
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
              <a href="<?=URLROOT?>/public/produtos.php?tipo=skin" class="home2">Skins</a>
            </li>
            <li>
              <a href="<?=URLROOT?>/public/produtos.php?tipo=itens" class="home2">Itens</a>
            </li>
            <li>
              <a href="<?=URLROOT?>/public/produtos.php?tipo=conta" class="home2">Contas</a>
              
            </li>
            <li>
              <a href="<?=URLROOT?>/public/produtos.php?tipo=jogo" class="home2">Jogos</a>
              
            </li>
          </ul>
        </div>
      </div>

      <div class="carrinho-wrapper" id="carrinho-wrapper">
        <div class="count-produto" id="count-produto"></div>
        <div class="dados-carrinho" id="modal-carrinho">
          <div class="text-dados-carrinho">
            <i class='bx bx-x close'></i>
            <div id="lista-carrinho"></div>
            <div class="precocarrinho-linkcarrinho">
              <div class="preco-total" id="preco-total"></div>
            </div>
            <div class="precocarrinho-linkcarrinho">
              <a href="<?=URLROOT?>/public/carrinho.php" class="link-carrinho">Ver carrinho</a>
            </div>
          </div>
        </div>
        <div class="carrinho" id="btn-modal">
          <i class='bx bx-cart'></i>
        </div>
      </div>
      <script>
        let inputbox = document.querySelector(".input-box");
        let searchBox = document.querySelector(".search-box .bx-search");
        var span = document.getElementsByClassName("close")[0];
        var p,t,l,s,hr;
        var totalpreco = 0;
        var count = 0;

        searchBox.addEventListener("click", ()=>{
          inputbox.classList.toggle("showInput");
        })
        let produto = JSON.parse(localStorage.getItem('produto'))
        if(localStorage.getItem('produto')!= null){
          
          produto.forEach(function (item, indice, array) {
            p = document.createElement("div");
            s = document.createElement("span");
            hr = document.createElement("hr")
            s.className = "span-preco";
            p.className = "div-carrinho-nome-produto";
            t = document.createTextNode(item.nomeproduto);
            l = document.createTextNode('R$ ' + item.valor);
            p.appendChild(t);
            s.appendChild(l);
            document.getElementById("lista-carrinho").appendChild(p);
            document.getElementById("lista-carrinho").appendChild(s);
            document.getElementById("lista-carrinho").appendChild(hr);
            console.log(item)

            totalpreco= parseFloat(totalpreco)+parseFloat(item.valor);
            console.log(totalpreco)

            count++
          });
          p = document.createTextNode('Valor total: '+'R$ ' + totalpreco);
          document.getElementById('preco-total').appendChild(p)
          document.getElementById('count-produto').textContent =  count
      }else {
        document.getElementById('carrinho-wrapper').style.display = 'none'
        document.getElementById('btn-modal').style.display = 'none'
      }
      </script>
    </nav>
    <script type="text/javascript" src="<?=URLROOT?>/public/js/carrinhomodal.js"></script>