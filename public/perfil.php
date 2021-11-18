<?php

require("../app/db/conexao.php");

session_start();

if(!isset($_SESSION['iduser'])){
    header('Location: login.php');
    exit;
}
$sql = $conexao->prepare("SELECT * FROM loja.usuario where iduser = :id_session");
$sql->bindParam('id_session', $_SESSION['iduser'], PDO::PARAM_INT);
$result = $sql->execute();
$user = $sql->fetch(PDO::FETCH_ASSOC);

$page_title = 'MyTeams | Perfil';

$links = ['<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/JQuery3.3.1.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="js/scriptdiv.js" defer></script>
<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/JQuery3.3.1.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>'];

require('includes/header.php');

?>
      <div class="sidebar" id="sidebar">
        <div>
          <i class='bx bx-menu' id="btn"></i>
        </div>
          <ul>
            <hr>
            <li id="action-dados" style="cursor:pointer">
              <a>
              <i class='bx bxs-user'></i>
              <span class="links-name">Dados</span>
              </a>
              <span class="tooltip" >Dados</span>
            </li>
            <li id="action-compras" style="cursor:pointer">
              <a>
              <i class='bx bxs-basket'></i>
              <span class="links-name">Compras</span>
              </a>
              <span class="tooltip">Compras</span>
            </li>
            <li  id="action-vendas" style="cursor:pointer">
              <a>
              <i class='bx bxs-shopping-bag'></i>
              <span class="links-name">Vendas</span>
              </a>
              <span class="tooltip">Vendas</span>
            </li>
            <li id="action-anuncios" style="cursor:pointer">
              <a>
              <i class='bx bxs-store-alt'></i>
              <span class="links-name">Anuncie aqui</span>
              </a>
              <span class="tooltip">Anuncie aqui</span>
            </li>
            <li>
              <a href="../app/logout.php">
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
                  <label  class="dados">  <?php echo DateTime::createFromFormat('Y-m-d', $user["dtnascimento"])->format('d/m/Y');; ?></label>
                </div>
                <div class="textinput">
                  <span class="detalhe">Sexo:</span>
                  <label  class="dados">  <?php echo $user["sexo"]; ?></label>
                </div>
              </div>
            </form>
            <div class="modal-div-btn"> 
              <a id="modalbtn">Alterar dados pessoais</a>
            </div>

              <div id="myModal" class="modal">
                <div class="modal-content">
                  <span class="titulodados" style="margin: 20px;">Alteração de dados</span>
                  <span class="close"></span>
                  <form action="POST">
                    <div class="alteracao-dados">
                      <div class="alteracao-dados-input">
                        <span class="nome-alterado">Nome:</span>
                        <input type="sobrenome" name="sobrenome" class="sobrenome" placeholder="<?php echo $user["nome"];?>" >
                      </div>

                      <div class="alteracao-dados-input">
                        <span class="nome-alterado">Sobrenome:</span>
                        <input type="sobrenome" name="sobrenome" class="sobrenome" placeholder="<?php echo $user["sobrenome"];?>">
                      </div>

                      <div class="alteracao-dados-input">
                        <span class="nome-alterado">Email:</span>
                        <input type="sobrenome" name="sobrenome" class="sobrenome" placeholder="<?php echo $user["email"];?>">
                      </div>
                      <div class="alteracao-dados-input">
                        <span class="nome-alterado">CPF:</span>
                        <input type="cpf" name="cpf" class="form-control"  onkeypress="$(this).mask('000.000.000-00');" placeholder="<?php echo $user["cpf"];?>" >
                      </div> 
                      <div class="alteracao-dados-input">
                        <span class="nome-alterado">Data de nascimento:</span>
                        <input type="dtnascimento" name="dtnascimento" class="form-control" onkeypress="$(this).mask('00/00/0000')" placeholder="<?php echo DateTime::createFromFormat('Y-m-d', $user["dtnascimento"])->format('d/m/Y');; ?>">
                      </div>
                      <div class="alteracao-dados-input">
                        <span class="nome-alterado">Telefone:</span>
                        <input type="telefone" name="telefone" class="form-control"  onkeypress="$(this).mask('(00) 0000-00009')" placeholder="<?php echo $user["telefone"];?>">
                      </div>
                    </div>
                    <div class="genero-geral"  style="margin: 20px;">
                    <input type="radio" name="genero" id="dot-1" class="radiobtn-genero" value="Masculino">
                    <input type="radio" name="genero" id="dot-2" class="radiobtn-genero" value="Feminino">
                    <input type="radio" name="genero" id="dot-3" class="radiobtn-genero" value="Outro">
                    <span class="genero-titulo">Sexo</span>
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
                    <div class="alteracao-dados-btn">
                      <input type="submit" value="Realizar Alteração" class="btncadastro">
                    </div>
                  </form>
                </div>
              </div>
        </div>
      </nav>
      <nav class="compras" id="compras">
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
      <nav class="vendas" id="vendas">
        <div class="titulo-vendas"><i class='bx bxs-shopping-bag'></i><p>Minhas vendas</p></div>
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

      <nav class="anuncios" id="anuncios">
        <div class="anuncios-box">
          <div class="tituloanucio">Anuncie Aqui</div>
          <form id="anunciar" name="anunciar" enctype="multipart/form-data">
            <div class="anuncio-box-sub">

              <div class="nomeanuncio">
                <p>Título do anúncio</p>
                <input type="text" id="nome" name="nome" placeholder="Titulo do anúncio" required>
              </div>

              <div class="tipoanuncio">
                <p>Tipo</p>
                  <select id="tipo" name="tipo" form="anunciar" required>
                    <option value="" disabled selected>Escolha a sua opção</option>
                    <option value="conta"><span>Conta</span></option>
                    <option value="skin"><span>Skin</span></option>
                    <option value="itens"><span>Itens</span></option>
                  </select> 
              </div>

              <div class="precoanuncio">
                <p>Preço</p>
                <input type="text" id="preco" name="preco"  placeholder="R$ 0,00" maxlength="12" required>
              </div>

              <div class="fotoanuncio">
                <p class="p">Foto do anuncio</p>
                <input type="file" name="arquivo" id="arquivo" class="arquivo">
                <input type="text" name="file" id="file" class="file" placeholder="Arquivo" readonly="readonly">
                <input type="button" class="btn" value="SELECIONAR">
              </div>

              <div class="descricaoanuncio" required>
                <p>Descrição</p>
                <textarea name="descricao" id="text" maxlength="150" placeholder="Fale um pouco mais sobre o produto"></textarea>
              </div>
              
              <div class="btn-anunciar">
                <input type="submit" value="Anunciar">
              </div>
              
            </div>
          </form>
        </div>
      </nav>
<?php
  require('includes/footer.php');
?>
<script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function(){
          sidebar.classList.toggle("o");
        }

        let modal_btn_dados = document.getElementById("modalbtn")
        let modal_dados = document.getElementById("myModal")

        modal_btn_dados.onclick = function(){
          modal_dados.style.display = "flex";
        }

        $("#preco").maskMoney({prefix:'R$ ', allowNegative: false, thousands:'.', decimal:',', affixesStay: true});

  </script>
  <script src="js/scriptajax.js"></script>
  <script src="js/jquery.maskMoney.js"></script>