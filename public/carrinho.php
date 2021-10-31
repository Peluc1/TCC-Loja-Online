<?php

require('../app/db/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Carrinho</title>
      <meta charset="UTF-8">
      <link rel="sortcut icon" href="<?=URLROOT?>/public/imagens/icons/logo.jpeg" type="image/x-icon" />
      <link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/projeto.css">
      <link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?=URLROOT?>/public/css/forms.css">
      <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
  </head>
  <body>
  <header>
    <nav class="menuprincipal">
      <div class="navbar" id="navbar">
        <div class="logo"><a href="../index.php">MyTeams</a></div>
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
      <div class="carrinho-resumo">
        <div class="carrinho-lista-container">
          <div class="titulo-lista-container-carrinho">
            <i class='bx bxs-shopping-bag-alt'></i>
            <span>PRODUTOS</span>
          </div>
            <div class="carrinho-lista-produtos" id="carrinho-lista-produtos">
            </div>
        </div>
        
        <div class="resumo-preco-total">
          <div class="titulo-resumo-preco">
            <i class='bx bxs-paste'></i>
            <span>RESUMO</span>
          </div>
          <div class="preco-total-subcontainer-carrinho" id="resumo-preco"></div>
          <div class="button-pagamento-carrinho">
            <a href="pagamento.php" class="button-pagamento-link">Ir para o pagamento</a>
          </div>
          <div class="button-sair-carrinho">
            <a href="<?=URLROOT?>/public/produtos.php" class="button-sair-link">Continuar comprando</a>
          </div>
        </div>
      </div>
</nav>
</body>
<script>
        let inputbox = document.querySelector(".input-box");
        let searchBox = document.querySelector(".search-box .bx-search");
        var i,p,d,n,q,r,s,hr,tx;
        var totalpreco = 0;
        var count = 0;

        searchBox.addEventListener("click", ()=>{
          inputbox.classList.toggle("showInput");
        })

        let produto = JSON.parse(localStorage.getItem('produto'))
        if(typeof produto !== 'undefined' && produto.length > 0){
          
          produto.forEach(function (item, indice, array) {
            i = document.createElement("img");
            p = document.createElement("div"); //carrinho-produto-nome
            d = document.createElement("div"); //carrinho-produto-individual
            n = document.createElement("div"); //linha-descricao-carrinho
            q = document.createElement("div"); //divisoria div
            r = document.createElement("div"); //divisoria div
            s = document.createElement("span"); //carrinho-produto-preco
            hr = document.createElement("hr"); //divisoria

            //imagem
            //img
            i.src = "imagens/upload/" + item.imagem;
            i.width = "120"
            i.height = "120"
            //imagem

            //nome produto
            //div
            p.className = "carrinho-produto-nome";
            t = document.createTextNode(item.nomeproduto);
            p.appendChild(t);
            //nome produto

            //preco produto
            //span
            s.className = "carrinho-produto-preco";
            l = document.createTextNode('R$ ' + item.valor);
            s.appendChild(l);
            //preco produto

            //div do produto
            d.className = "carrinho-produto-individual"
            d.appendChild(i);//imagem
            d.appendChild(p);//nome
            d.appendChild(s);//preco
            //div do produto

            //divisoria
            //hr
            n.className = "linha-descricao-carrinho"
            hr.className = "linha-divisioria-carrinho"            
            m = document.createTextNode("Nome ");
            v = document.createTextNode("Preço ");
              //cria div
            n.appendChild(q);
            n.appendChild(r);
              
              //add texto na div
            q.appendChild(m);
            r.appendChild(v);
            //divisoria
                    
            //adiciona tudo na pagina
            document.getElementById("carrinho-lista-produtos").appendChild(n);
            document.getElementById("carrinho-lista-produtos").appendChild(d);
            document.getElementById("carrinho-lista-produtos").appendChild(hr);
            //adiciona tudo na pagina

            totalpreco=parseFloat(totalpreco)+parseFloat(item.valor);
            console.log(totalpreco)

            count++
          });

          //resumo
          t = document.createElement("p")
          p = document.createTextNode('Valor total: ');
          tx = document.createTextNode('R$ ' + totalpreco);
          t.appendChild(tx);
          document.getElementById('resumo-preco').appendChild(p);
          document.getElementById('resumo-preco').appendChild(t);
          document.getElementById('count-produto').textContent = count
        }
      </script>
