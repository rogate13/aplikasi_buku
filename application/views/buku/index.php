<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Buku</h1>
        <form method="GET" action="<?= base_url('Buku'); ?>" class="form-inline mb-4">
            <input type="text" name="search" class="form-control mr-2" placeholder="Cari buku..." value="<?= $this->input->get('search'); ?>">
            <select name="sort" class="form-control mr-2">
                <option value="">Urutkan</option>
                <option value="judul">Judul</option>
                <option value="penulis">Penulis</option>
                <option value="tahun_terbit">Tahun Terbit</option>
            </select>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
        <a href="<?= base_url('Buku/create'); ?>" class="btn btn-success mb-4">Tambah Buku</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $b) : ?>
                    <tr>
                        <td><?= $b['judul']; ?></td>
                        <td><?= $b['penulis']; ?></td>
                        <td><?= $b['tahun_terbit']; ?></td>
                        <td><?= $b['status']; ?></td>
                        <td>
                            <a href="<?= base_url('Buku/edit/' . $b['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('Buku/delete/' . $b['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>