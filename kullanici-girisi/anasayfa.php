<?php
if($_SESSION){ //Oturum Açılmış
?>
    <h1>Hoşgeldin: <?php echo $_SESSION["name"]; ?></h1>
    <h2>Kullanıcıadı: <?php echo $_SESSION["username"]; ?></h2>
    <a href="?operation=logout">çılış yap</a>
<?php
}
else{ //Oturum Açılmamış
?>
    <h1>ANA SAYFA</h1>
    <a href="?operation=giris">giriş yap</a>
<?php
}
?>