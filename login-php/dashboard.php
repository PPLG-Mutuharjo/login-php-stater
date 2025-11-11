<?php
// TUGAS UTAMA SISWA:
// 1. Mulai session (session_start())
// 2. Buat pengecekan (if-else)
//    Jika TIDAK ADA session 'username' (atau 'user_id'),
//    maka redirect (paksa) pengguna kembali ke halaman login.php
//
// session_start();
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit(); // Penting untuk menghentikan eksekusi script
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="alert alert-success">
            <h4 class="alert-heading">Selamat Datang!</h4>
            <p>
                Halo,
                <strong>
                    <?php
                    // TUGAS SISWA: Tampilkan nama pengguna yang login dari data SESSION
                    // Contoh: echo $_SESSION['nama_lengkap']; 
                    ?>
                </strong>
                Anda telah berhasil login. Ini adalah halaman rahasia Anda.
            </p>
            <hr>
            <p class="mb-0">Halaman ini adalah bukti bahwa Anda berhasil menerapkan sistem session di PHP.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>