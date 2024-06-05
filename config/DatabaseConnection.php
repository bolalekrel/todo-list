<?php
$db_host = "demoprojekt-server.mysql.database.azure.com"; // Adres IP lub nazwa hosta bazy danych
$db_user = "dwvklagjyb@demoprojekt"; // Nazwa użytkownika bazy danych
$db_pass = "bTiwqIMMa3KjdQpfnnFZlL6wbl1DYj6jckjavjkqMRYo7nurDlyaZfcMNAB"; // Hasło do bazy danych
$db_name = "demoprojekt"; // Nazwa bazy danych

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Ustawienia SSL - zakładając, że certyfikat jest w katalogu głównym projektu
$conn->ssl_set(NULL, NULL, dirname(__DIR__) . "/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Sprawdź połączenie po ustawieniu SSL
if (!$conn->real_connect($db_host, $db_user, $db_pass, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
