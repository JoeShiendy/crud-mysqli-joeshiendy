<?php
require_once '../config/database.php';

$id = $_GET['id'];

// Ambil data customer lama dengan Prepared Statement (Ketentuan No. 4)
$stmt = $conn->prepare("SELECT * FROM customers WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Data customer tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Shiennails - Edit Customer</title>
</head>
<body>

    <h2>Edit Data Customer Shiennails</h2>
    <a href="index.php">← Kembali</a><br><br>

    <form action="../process/edit_process.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

        <label>Nama Customer:</label><br>
        <input type="text" name="nama_customer" value="<?= htmlspecialchars($row['nama_customer']); ?>" required><br><br>

        <label>No. WhatsApp:</label><br>
        <input type="text" name="no_whatsapp" value="<?= htmlspecialchars($row['no_whatsapp']); ?>" required><br><br>

        <label>Layanan / Treatment:</label><br>
        <input type="text" name="layanan" value="<?= htmlspecialchars($row['layanan']); ?>" required><br><br>

        <label>Total Bayar (Rp):</label><br>
        <input type="number" name="total_bayar" value="<?= $row['total_bayar']; ?>" required><br><br>

        <label>Tanggal Booking:</label><br>
        <input type="date" name="tanggal_booking" value="<?= $row['tanggal_booking']; ?>" required><br><br>

        <button type="submit">Update Data Customer</button>
    </form>

</body>
</html>

