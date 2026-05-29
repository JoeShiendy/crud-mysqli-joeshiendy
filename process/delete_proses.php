<?php
require_once '../config/database.php';

$id = $_GET['id'];

// Hapus data dengan Prepared Statement (Ketentuan No. 4)
$stmt = $conn->prepare("DELETE FROM customers WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: ../views/index.php");
    exit();
} else {
    die("Gagal menghapus data customer: " . $stmt->error);
}
?>

