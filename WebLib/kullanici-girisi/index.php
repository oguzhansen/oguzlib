<?php 
    include("config.php");
    session_start(); 
    ob_start(); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oğuz'unkodu</title>
</head>
<body>
    <?php
        $operation = @$_GET["operation"];
        switch($operation){

            case "giris":
            include("giris.php");
            break;

            case "logout":
            include("logout.php");
            break;

            default:
            include("anasayfa.php");
            break;

        }
    ?>
</body>
</html>