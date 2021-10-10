<?php 
    require("../app/db/conexao.php");
    session_start();

    $page_title = '>MyTeams / Cadastro';

    $links = ['<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>'];

    require('includes/header.php');

?>
<nav class="cadastro">
    <form class="cadastroform" action="../app/cadastrar.php" method="POST">
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
                <p for="email">E-Mail</p>
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
<?php
require('includes/footer.php');
?>