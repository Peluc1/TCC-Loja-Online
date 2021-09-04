<?php

define('host', '127.0.0.1');
define('usuario' , 'root');
define('senha' , '');
define('db', 'loja');
/*$conexao = mysqli_connect(host, usuario, senha, db) or die ('Não foi possível conectar');*/

$conexao = new PDO("mysql:host=127.0.0.1;dbname=loja", "root", "123456")


?>