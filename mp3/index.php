<?php #TEMPLATE UTILIZADO EM TODAS AS PAGES?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">    
    <title>MP3</title>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container pt-5">
        <?php
            include_once 'helpers.php';

            if (isset($_GET['page'])){
                if (file_exists("pages/{$_GET['page']}.php")){
                    include_once "pages/{$_GET['page']}.php";
                }else{
                    include_once 'pages/404.php';
                }
            }else{
                include_once 'pages/albums.php';
            }
        ?>        
    </div>
</body>
</html>