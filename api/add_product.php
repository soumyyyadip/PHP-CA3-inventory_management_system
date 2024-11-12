<?php
include('../includes/db_connect.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $stmt = $conn->prepare("INSERT INTO products (name, description, quantity, price) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $description, $quantity, $price]);
    header('Location: ../pages/view_inventory.php');
}
?>
