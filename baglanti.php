<?php
require_once 'config.php';

try {
    $baglanti = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if (!$baglanti) {
        throw new Exception("Veritabanına bağlanılamadı: " . mysqli_connect_error());
    }

    mysqli_set_charset($baglanti, "UTF8");
    
    // Enable error reporting for mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
} catch (Exception $e) {
    error_log($e->getMessage());
    // Show a user-friendly message
    die("Üzgünüz, şu anda sistemde teknik bir sorun var. Lütfen daha sonra tekrar deneyin.");
}
?>
