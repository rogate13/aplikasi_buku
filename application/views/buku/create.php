<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku Baru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Buku Baru</h1>
        <form method="POST" action="<?= base_url('Buku/store'); ?>">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" id="penulis" name="penulis" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <a href="<?= base_url('Buku'); ?>" class="btn btn-secondary mt-3">Kembali ke Daftar Buku</a>
    </div>
</body>

</html>