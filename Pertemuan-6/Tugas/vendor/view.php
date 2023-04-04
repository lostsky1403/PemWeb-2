<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from kartu where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM kartu a
    //INNER JOIN jenis_kartu b ON a.jenis_kartu_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM vendor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA kartu ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><?=$row['kota']?></td>
        </tr>
        <tr>
            <td>Kontak</td>
            <td><?=$row['kontak']?></td>
        </tr>
    </tbody>
</table>