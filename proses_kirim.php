<?php
$admin = "hradin24@gmail.com";
$nama = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$subject = htmlentities($_POST['subject']);
$message = htmlentities($_POST['message']);

$pengirim = "From: ".$email.", name: ".$nama."\r\n";

if (mail($admin, $subject, $message, $pengirim)) {
    echo "<p class='fs-4 text-primary text-center'> pesan terkirim</p>";
}else {
    echo "<p class='fs-4 text-danger text-center'> pesan tidak terkirim <br> coba beberapa saat lagi </p>";
}