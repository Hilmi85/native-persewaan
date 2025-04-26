<?php
session_start(); // Mulai atau lanjutkan sesi

if (isset($_SESSION['user_id'])) {
    echo '<script>alert("Anda berhasil logout");window.location="login.php"</script>';
    // Hapus semua data sesi
    session_unset();
    // Hancurkan sesi
    session_destroy();
}
?>