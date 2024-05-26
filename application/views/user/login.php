<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Login Pengguna</h1>
        <form id="loginForm" method="POST" action="<?= base_url('User/authenticate'); ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <a href="<?= base_url('User/register'); ?>" class="btn btn-secondary mt-3">Belum punya akun? Daftar di sini</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.js"></script>
    <script>
        <?php if ($this->session->flashdata('error')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: '<?= $this->session->flashdata('error'); ?>'
            });
        <?php endif; ?>

        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form untuk submit langsung

            // Validasi
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (!username || !password) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Username dan password harus diisi!'
                });
            } else {
                this.submit();
            }
        });
    </script>
</body>

</html>