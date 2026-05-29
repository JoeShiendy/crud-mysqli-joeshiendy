<?php
require_once '../config/database.php';

$result = $conn->query("SELECT * FROM customers ORDER BY id DESC");

if (!$result) {
    die("Gagal mengambil data customer: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Shiennails Customer Data</title>
</head>
<body>

    <h2>Shiennails Salon - Customer Management System</h2>
    <p>Data Pelanggan dan Riwayat Treatment</p>
    
    <a href="create.php">[+] Tambah Customer Baru</a><br><br>

    <table border="1" cellpadding="8" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>No. WhatsApp</th>
                <th>Layanan / Treatment</th>
                <th>Total Bayar</th> <th>Tanggal Booking</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($result->num_rows > 0): 
                $no = 1;
                while($row = $result->fetch_assoc()): 
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['nama_customer']); ?></td>
                    <td><?= htmlspecialchars($row['no_whatsapp']); ?></td>
                    <td><?= htmlspecialchars($row['layanan']); ?></td>
                    <td>Rp <?= number_format($row['total_bayar'], 0, ',', '.'); ?></td> <td><?= date('d-m-Y', strtotime($row['tanggal_booking'])); ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
                        <a href="../process/delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data customer ini?')">Hapus</a>
                    </td>
                </tr>
            <?php 
                endwhile; 
            else: 
            ?>
                <tr>
                    <td colspan="7" align="center">Belum ada data customer di Shiennails.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>

