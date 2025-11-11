# login-php-stater
💡 Panduan untuk Siswa (Tugas Backend)

Buat Database & Tabel:
Buat database baru (misal: db_sekolah).
Buat tabel users dengan struktur minimal: id (INT, AUTO_INCREMENT, PRIMARY KEY), username (VARCHAR), password (VARCHAR), nama_lengkap (VARCHAR).

Buat config.php:
File ini berisi koneksi ke database menggunakan mysqli atau PDO. (Contoh: $koneksi = mysqli_connect(...)).

Buat proses_register.php:
include 'config.php'.
Ambil data dari $_POST (username, password, nama_lengkap).
PENTING: Lakukan hashing pada password menggunakan password_hash(). Jangan pernah menyimpan password sebagai teks biasa.

Buat query INSERT INTO users ...
Jika berhasil, arahkan (redirect) siswa ke login.php.

Buat proses_login.php:
include 'config.php'.
Mulai session: session_start().
Ambil data dari $_POST (username, password).
Cari di database: SELECT * FROM users WHERE username = '...'.
Jika username ditemukan, verifikasi password menggunakan password_verify($password_input, $password_dari_db).
Jika verifikasi berhasil:
Simpan data pengguna ke $_SESSION (misal: $_SESSION['username'] = $data['username'];, $_SESSION['nama_lengkap'] = $data['nama_lengkap'];).
Redirect ke dashboard.php.
Jika gagal (username salah atau password salah), redirect kembali ke login.php (mungkin dengan pesan error).

Buat logout.php:
session_start().
Hancurkan semua data session: session_destroy().
Redirect ke login.php.
Amankan dashboard.php:

Buka kembali file dashboard.php dan isi bagian "TUGAS UTAMA SISWA" di paling atas untuk mengecek session.

Ini akan menjadi proyek yang sangat komprehensif untuk mengenalkan mereka pada dasar-dasar otentikasi web dengan PHP.
