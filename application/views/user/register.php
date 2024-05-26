<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pengguna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Registrasi Pengguna</h1>
        <form id="registerForm" method="POST" action="<?= base_url('User/store'); ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role" class="form-control" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
        <a href="<?= base_url('User/login'); ?>" class="btn btn-secondary mt-3">Sudah punya akun? Login di sini</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.js"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form untuk submit langsung

            // Validasi
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const role = document.getElementById('role').value;

            if (!username || !password || !role) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Semua field harus diisi!'
                });
            } else {
                this.submit();
            }
        });
    </script>
</body>

</html>