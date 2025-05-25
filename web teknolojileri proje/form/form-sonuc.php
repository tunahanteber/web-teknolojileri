<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Gönderilen Form Bilgileri</h2>";
    echo "Ad: " . htmlspecialchars($_POST["ad"]) . "<br>";
    echo "Soyad: " . htmlspecialchars($_POST["soyad"]) . "<br>";
    echo "E-posta: " . htmlspecialchars($_POST["email"]) . "<br>";
    echo "Telefon: " . htmlspecialchars($_POST["telefon"]) . "<br>";
    echo "Cinsiyet: " . htmlspecialchars($_POST["cinsiyet"]) . "<br>";
    
    if (!empty($_POST["ilgiler"])) {
        echo "İlgi Alanları: " . implode(", ", $_POST["ilgiler"]) . "<br>";
    }

    echo "Mesaj: " . nl2br(htmlspecialchars($_POST["mesaj"])) . "<br>";
} else {
    header("Location: form.html");
    exit;
}
?>
