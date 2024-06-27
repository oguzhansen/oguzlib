<?php

    session_start();

    include "../config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blog</title>
    <link href="../css/styles.css" rel="stylesheet" />
</head>
<body>
    <center>
        <div class="form" style="width:550px;margin-top:13%; padding:50px; background-color:grey; color:white;">
            <form method="post">
                <h3>Admin Giriş</h3><br/>
                <?php
                
                if(isset($_POST["loginPost"]))
                {
                    $kadi = $_POST["kadi"];
                    $pass = md5($_POST["pass"]);

                    $user = $db->query("select * from users where username = '$kadi' and password = '$pass'")->fetch(PDO::FETCH_ASSOC);

                    if($user)
                    {
                        echo "<div class='alert alert-success'>Başarılı giriş, yönlendiriliyorsunuz...</div>";
                        
                        $_SESSION['user'] = $kadi;

                        header("Refresh: 2; url=index.php");
                    }
                    
                    else
                    {
                        echo "<div class='alert alert-danger'>Hatalı kullanıcı adı veya şifre</div>";
                    }
                    
                }
                
                ?>
                <input class="form-control" type="text" name="kadi" value="<?php 
                
                if(isset($_POST["kadi"]))
                {
                    echo $_POST["kadi"];
                }
                
                ?>" placeholder="Kullanıcı Adı"/><br/>
                <input class="form-control" type="password" name="pass" placeholder="Şifre"/><br/>
                <button class="btn btn-primary" name="loginPost"> Giriş Yap </button>
            </form>
        </div>
    </center>
</body>
</html>
