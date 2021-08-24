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
    <meta charset="UTF-8">
  </head>
<body>
<header>
    <a href="produtos.php" class="logo">MyTeams</a>
    <nav class="nav_links">
      <li><a href="projeto.php">Início</a></li>
      <li><a href="perfil.php">Perfil</a></li>
      <div class="dropdown">
        <li><a href="produtos.php">Produtos</a></li>
        <div class="dropdown-content">
           <a><ul>League Of Legends</ul></a>
           <a><ul>CS:GO</ul></a>
           <a><ul>World of Warcraft</ul></a>
           <a><ul>Assinaturas</ul></a>
        </div>      
      </div>   
          <li><a href="login.php">Cadastro/Login</a></li>
    </nav>
</header>

<div class="perfil-wrapper">

  <div class="lista">
    <ul>Dados</ul>
    <ul>Endereços</ul>
    <ul>Compras</ul>
    <ul>Sair</ul>






  </div>

  <div class="perfil">
      

      <span class="p-perfil">Nome:</span> 
      <label class="dados"> <?php echo $user["nome"]; ?></label>

      <span class="p-perfil">Sobrenome:</span>
      <label  class="dados"> <?php echo $user["sobrenome"]; ?></label>

      <span class="p-perfil">Email:</span>
      <label  class="dados"> <?php echo $user["email"]; ?></label>

      <span class="p-perfil">CPF:</span>
      <label  class="dados">  <?php echo $user["cpf"]; ?></label>

      <span class="p-perfil">Telefone:</span>
      <label  class="dados">  <?php echo $user["telefone"]; ?></label>

      <span class="p-perfil">Data de nascimento:</span>
      <label  class="dados">  <?php echo $user["dtnascimento"]; ?></label>
      
      <a href="logout.php">Sair</a>

  </div>

</div>
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