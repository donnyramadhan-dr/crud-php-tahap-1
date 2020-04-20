<?php

    try {
        $conn = new PDO("mysql:host=localhost;dbname=produk","root","");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>

