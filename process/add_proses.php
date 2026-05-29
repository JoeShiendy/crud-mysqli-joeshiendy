<?php
require_once '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_customer   = $_POST['nama_customer'];
    $no_whatsapp     = $_POST['no_whatsapp'];
    $layanan         = $_POST['layanan'];
    $total_bayar     = $_POST['total_bayar']; // Tangkap input baru
    $tanggal_booking = $_POST['tanggal_booking'];

    // Prepared Statement disesuaikan
    $stmt = $conn->prepare("INSERT INTO customers (nama_customer, no_whatsapp, layanan, total_bayar, tanggal_booking) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiis", $nama_customer, $no_whatsapp, $layanan, $total_bayar, $tanggal_booking);
    
    if ($stmt->execute()) {
        header("Location: ../views/index.php");
        exit();
    } else {
        die("Gagal menyimpan data customer: " . $stmt->error);
    }
}
?>