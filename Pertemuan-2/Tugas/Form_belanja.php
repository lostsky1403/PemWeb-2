<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="row m-3">
    <div class="col-8">
        <h2>Belanja Online</h2>
        <hr>

        <form method="post">
            <div class=" form-group row">
                <label for="Nama" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input id="Nama" name="Nama" placeholder="Masukkan nama customer" type="text" required="required"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih produk</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="Produk_0" type="radio" class="custom-control-input" value="TV"
                            required="required">
                        <label for="Produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="Produk_1" type="radio" class="custom-control-input" value="Kulkas"
                            required="required">
                        <label for="Produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="Produk_2" type="radio" class="custom-control-input" value="Mesin cuci"
                            required="required">
                        <label for="Produk_2" class="custom-control-label">Mesin cuci</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="Jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <input id="Jumlah" name="Jumlah" placeholder="Jumlah pembelian" type="number" class="form-control"
                        required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-4">
        <ul class="list-group">
            <li class="list-group-item active">Daftar harga</li>
            <li class="list-group-item">TV : 4.200.000</li>
            <li class="list-group-item">Kulkas : 3.500.000</li>
            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
            <li class="list-group-item active">Harga dapat berubah setiap saat</li>
        </ul>
    </div>
    <hr class="col-12">
    <?php
    if (isset($_POST['submit'])) {
        $customer = $_POST['Nama'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['Jumlah'];

        if ($produk == "TV") {
            $total = $jumlah * 4200000;
            echo "Nama Customer : $customer <br>";
            echo "Produk Pilihan : $produk <br>";
            echo "Jumlah Beli : $jumlah <br>";
            echo "Total Belanja : RP." . number_format($total, 2) . "<br>";
        } elseif ($produk == "Kulkas") {
            $total = $jumlah * 3100000;
            echo "Nama Customer : $customer <br>";
            echo "Produk Pilihan : $produk <br>";
            echo "Jumlah Beli : $jumlah <br>";
            echo "Total Belanja : RP." . number_format($total, 2) . "<br>";
        } elseif ($produk == "Mesin cuci") {
            $total = $jumlah * 3800000;
            echo "Nama Customer : $customer <br>";
            echo "Produk Pilihan : $produk <br>";
            echo "Jumlah Beli : $jumlah <br>";
            echo "Total Belanja : RP." . number_format($total, 2) . "<br>";

        } else {
            echo "produk tidak ada";
        }
    }
    ?>
</body>

</html>