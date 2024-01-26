<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dengan menggunakan filter_input
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $kategori = filter_input(INPUT_POST, 'kategori', FILTER_SANITIZE_STRING);

    // Validasi input
    if (empty($nama) || empty($email) || empty($kategori)) {
        // Pesan kesalahan jika ada input yang kosong
        echo "Semua kolom harus diisi. Silakan coba lagi.";
    } elseif ($email === false) {
        // Pesan kesalahan jika alamat email tidak valid
        echo "Alamat email tidak valid. Silakan coba lagi.";
    } else {
        // Proses data pendaftaran (contoh: bisa disimpan ke database atau dikirim melalui email)
        // Di sini, kita hanya mencetak data sebagai contoh
        echo "Terima kasih, $nama! Anda telah mendaftar untuk kategori $kategori. Kami akan menghubungi Anda melalui email $email.";
    }
} else {
    // Jika halaman ini diakses tanpa melalui form, kembalikan ke halaman utama
    header("Location: index.html");
    exit();
}
?>
