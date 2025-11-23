<?php
$servername = "localhost";
$username = "antrian";
$password = "Antrian123!";

$conn = new PDO("mysql:host=$servername;dbname=db_antrian", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

