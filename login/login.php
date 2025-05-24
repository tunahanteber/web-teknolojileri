<?php
$dogruKullanici = "b2412100001@sakarya.edu.tr";
$dogruSifre = "b2412100001";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullanici = $_POST["email"];
    $sifre = $_POST["password"];

    if ($kullanici == $dogruKullanici && $sifre == $dogruSifre) {
        $kullaniciAdi = explode("@", $kullanici)[0];
        echo "<!DOCTYPE html>
        <html lang='tr'>
        <head><meta charset='UTF-8'><title>Giriş Başarılı</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'></head>
        <body class='bg-success text-white d-flex justify-content-center align-items-center' style='height: 100vh;'>
        <div class='text-center'>
          <h1>Hoşgeldiniz $kullaniciAdi</h1>
          <a href='../index.html' class='btn btn-light mt-4'>Ana Sayfaya Dön</a>
        </div>
        </body></html>";
    } else {
        header("Location: login.html");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
?>
