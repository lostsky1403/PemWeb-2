<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pembelian";
$buys = $dbh->query($sql);
?>

<a class="btn btn-success" href="create.php" role="button">Create Kartu</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr style="text-align: center;">
            <th>No</th>
            <th>tanggal</th>
            <th>Nomor</th>
            <th>Produk_id</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Vendor_id</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($buys as $buy) {
            ?>
        <tr style="text-align: center;">
            <td>
                <?= $nomor ?>
            </td>
            <td>
                <?= $buy['tanggal'] ?>
            </td>
            <td>
                <?= $buy['nomor'] ?>
            </td>
            <td>
                <?= $buy['produk_id'] ?>
            </td>
            <td>
                <?= $buy['jumlah'] ?>
            </td>
            <td>
                <?= $buy['harga'] ?>
            </td>
            <td>
                <?= $buy['vendor_id'] ?>
            </td>
            <td>
                <a class="btn btn-primary" href="view.php?id=<?= $buy['id'] ?>">View</a>
                <a class="btn btn-primary" href="edit.php?id=<?= $buy['id'] ?>">Edit</a>
                <a class="btn btn-primary" href="delete_pelanggan.php?iddel=<?= $buy['id'] ?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $buy['nomor'] ?>?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>