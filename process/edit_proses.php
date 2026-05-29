<?php
require_once '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id              = $_POST['id'];
    $nama_customer   = $_POST['nama_customer'];
    $no_whatsapp     = $_POST['no_whatsapp'];
    $layanan         = $_POST['layanan'];
    $total_bayar     = $_POST['total_bayar'];
    $tanggal_booking = $_POST['tanggal_booking'];

    // Update data dengan Prepared Statement (Ketentuan No. 4)
    $stmt = $conn->prepare("UPDATE customers SET nama_customer=?, no_whatsapp=?, layanan=?, total_bayar=?, tanggal_booking=? WHERE id=?");
    $stmt->bind_param("sssisi", $nama_customer, $no_whatsapp, $layanan, $total_bayar, $tanggal_booking, $id);

    if ($stmt->execute()) {
        header("Location: ../views/index.php");
        exit();
    } else {
        die("Gagal mengupdate data customer: " . $stmt->error); // Ketentuan No. 3
    }
}
?>
