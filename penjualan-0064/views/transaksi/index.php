<?php include 'views/layout/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Daftar Transaksi</h2>
    <a href="index.php?page=transaksi&action=create" class="btn btn-primary">Tambah Transaksi</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo date('d/m/Y', strtotime($row['tanggal'])); ?></td>
                <td><?php echo $row['nama_pelanggan']; ?></td>
                <td><?php echo number_format($row['total'], 0, ',', '.'); ?></td>
                <td>
                    <a href="index.php?page=transaksi&action=view&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Detail</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include 'views/layout/footer.php'; ?>