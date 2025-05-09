<?php
$kullaniciAdi = "b241210351@ogr.sakarya.edu.tr";
$sifre = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gelenAd = trim($_POST['email']);
    $gelenSifre =trim( $_POST['password']);

    if ($gelenAd === $kullaniciAdi && $gelenSifre === $sifre) {
        $sadeAd = explode('@', $gelenAd)[0];
        echo "<h2>Hoşgeldiniz $sadeAd</h2>";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'hakkımda.html';
                }, 2000);
              </script>";
    } else {
        echo "<script>
                alert('Hatalı kullanıcı adı veya şifre!');
                window.location.href = 'index.html';
              </script>";
        exit;
    }
}
?>
