<?php
    $host = "localhost";
    $dbname = "blog";  // veritabanı adı
    $username = "root"; // veritabanı kullanıcıadı
    $password = ""; // veritabanı kullanıcı şifresi
    try{
        $db = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8","$username","$password");
    }
    catch(PDOException $message){
        echo $message->getMessage();
    }
?>
