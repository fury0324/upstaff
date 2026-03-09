<?php
require_once 'config/db.php';

$id = $_POST['id'];

$stmt = $conn->prepare("UPDATE users SET status='rejected' WHERE id=?");
$stmt->execute([$id]);

echo "success";