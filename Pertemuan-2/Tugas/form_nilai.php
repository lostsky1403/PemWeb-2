<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form nilai siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Form Nilai Siswa</h2>
        <hr>

        <form method="get" action="proses_nilai.php">
            <div class=" form-group row">
                <label for="Nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="Nama" name="Nama" placeholder="Masukkan nama" type="text" required="required"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select" required="required">
                        <option value="Pemweb">Pemrograman web</option>
                        <option value="DDP">Dasar-dasar pemrograman</option>
                        <option value="BasDat">Basis data</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="UTS" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="UTS" name="UTS" placeholder="Masukkan nilai UTS" type="text" class="form-control"
                        required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="UAS" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="UAS" name="UAS" placeholder="Masukkan nilai UAS" type="text" class="form-control"
                        required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="Praktikum" class="col-4 col-form-label">Nilai praktikum</label>
                <div class="col-8">
                    <input id="Praktikum" name="Praktikum" placeholder="Masukkan nilai praktikum" type="text"
                        class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>