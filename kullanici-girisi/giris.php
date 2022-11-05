<h1>Giriş Yap</h1>

<?php
    if($_POST){
        $username = $_POST["usernmame"];
        $password = $_POST["password"];
        if(!$username || !$password){
            echo '<span style="color:red;">Kullanıcıadı Şifrenizi Giriniz</span>';
        }
        else{
            $password = md5($password);

            $login = $db->prepare("SELECT * FROM users WHERE username=? AND password=?");
            $login->execute(array($username, $password));
            $l = $login->fetch(PDO::FETCH_ASSOC);

            if($l){
                echo '<span style="color:blue;">Giriş Başarılı</span>';
                $_SESSION["name"] = $l["user_name"];
                $_SESSION["username"] = $l["username"];
                header("location:/");
            }
            else{
                echo '<span style="color:red;">Kullanıcıadı Şifrenizi Hatalı Girdiniz</span>';
            }
        }
    }
?>
<form action="" method="POST">
    <label for="usernamek"> Kullanıcıadı: </label><br>
    <input type="text" id="usernamek" name="usernmame" placeholder="Kullanıcıadınızı Giriniz"><br>

    <label for="passwordk"> Şifre: </label><br>
    <input type="text" id="passwordk" name="password" placeholder="Şifrenizi Giriniz"><br>

    <br>

    <input type="submit" value="Giriş Yap">

</form>