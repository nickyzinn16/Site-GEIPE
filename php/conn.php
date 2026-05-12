<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "geip_db");

if (!$conn) {
    die("Erro na ligação: " . mysqli_connect_error());
}
?>