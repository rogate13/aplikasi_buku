<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Buku</h1>
        <form method="POST" action="<?= base_url('Buku/update/' . $buku['id']); ?>">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" class="form-control" value="<?= $buku['judul']; ?>" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" id="penulis" name="penulis" class="form-control" value="<?= $buku['penulis']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control" value="<?= $buku['tahun_terbit']; ?>" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" class="form-control">
                    <option value="tersedia" <?php if ($buku['status'] == 'tersedia') echo 'selected'; ?>>Tersedia</option>
                    <option value="dipinjam" <?php if ($buku['status'] == 'dipinjam') echo 'selected'; ?>>Dipinjam</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <a href="<?= base_url('Buku'); ?>" class="btn btn-secondary mt-3">Kembali ke Daftar Buku</a>
    </div>
</body>

</html>