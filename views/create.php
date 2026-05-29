<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Shiennails - Tambah Customer</title>
</head>
<body>

    <h2>Tambah Customer Baru Shiennails</h2>
    <a href="index.php">← Kembali ke Dashboard</a><br><br>

    <form action="../process/add_process.php" method="POST">
        
        <label>Nama Customer:</label><br>
        <input type="text" name="nama_customer" required placeholder="Nama Lengkap"><br><br>
        
        <label>No. WhatsApp:</label><br>
        <input type="text" name="no_whatsapp" required placeholder="Contoh: 08123456789"><br><br>
        
        <label>Layanan / Treatment:</label><br>
        <input type="text" name="layanan" required placeholder="Contoh: Gel Polish + Nail Art"><br><br>
        
        <label>Total Bayar (Rp):</label><br> <input type="number" name="total_bayar" required placeholder="Contoh: 150000"><br><br>
        
        <label>Tanggal Booking:</label><br>
        <input type="date" name="tanggal_booking" required><br><br>
        
        <button type="submit">Simpan Customer</button>
    </form>

</body>
</html>

