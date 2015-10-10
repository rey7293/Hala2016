<?php
$conn = new mysqli("mysql.hostinger.ph", "u258742682_rey", "Runescape7293", "u258742682_rey");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>