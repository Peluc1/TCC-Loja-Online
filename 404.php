<?php
require 'app/db/env.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR 404</title>
    <style>
        body{
            background-image: linear-gradient(to right, #022150 ,#5e00b5);
        }
        .content {
            border-radius: 30px;
            padding: 1em;
            width: 70%;
            margin: auto;
            background-color: #eee;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .header{
            display: flex;
        }
        h1{
            font-size: 3em;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="header">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.001 10h2v5h-2zM11 16h2v2h-2z"></path><path d="M13.768 4.2C13.42 3.545 12.742 3.138 12 3.138s-1.42.407-1.768 1.063L2.894 18.064a1.986 1.986 0 0 0 .054 1.968A1.984 1.984 0 0 0 4.661 21h14.678c.708 0 1.349-.362 1.714-.968a1.989 1.989 0 0 0 .054-1.968L13.768 4.2zM4.661 19 12 5.137 19.344 19H4.661z"></path></svg>
            <h1>404</h1>
        </div>
        <h3>A página que você está tentando acessar não existe ou foi movida</h3>
        <p>Tente <a href="<?=URLROOT?>/index.php">voltar para a home</a></p>
    </div>
</body>
</html>