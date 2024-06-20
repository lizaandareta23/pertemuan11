<?php
// Susunan file: oopmvc/index.php

// Memanggil model
require_once "model/anggota_model.php";
require_once "controller/anggota.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/oopmvc/index.php' === $uri) {
    index();
} elseif ('/oopmvc/index.php/detail' === $uri && isset($_GET['Id'])) {
    detail($_GET['Id']);
} else {
    header("HTTP/1.1 404 Not Found");
    echo "<html><body><h1>Page not found </h1></body></html>";
}
?>