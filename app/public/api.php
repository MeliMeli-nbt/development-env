<?php
include 'databaseconnect.php';

$query = $conn->prepare("SELECT * FROM employees");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($result);

