<?php

$kullanici = "b241210351@ogr.sakarya.edu.tr";
$sifre = "123456";

if ($_POST['name'] === $kullanici && $_POST['password'] === $sifre) {
    header("Location: hakkımda.html");
    exit;
} else {
    echo "Hatalı kullanıcı adı veya şifre.";
    exit;
}
?>
