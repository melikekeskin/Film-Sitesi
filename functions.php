<?php
require_once 'config.php';
require_once 'baglanti.php';

// Güvenli giriş fonksiyonu
function guvenliGiris($kullaniciAdi, $sifre) {
    global $baglanti;
    
    $kullaniciAdi = mysqli_real_escape_string($baglanti, $kullaniciAdi);
    
    $sql = "SELECT id, kullanici_adi, sifre FROM kullanicilar WHERE kullanici_adi = ?";
    $stmt = mysqli_prepare($baglanti, $sql);
    mysqli_stmt_bind_param($stmt, "s", $kullaniciAdi);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($user = mysqli_fetch_assoc($result)) {
        if (password_verify($sifre, $user['sifre'])) {
            // Güvenli session başlat
            session_start();
            session_regenerate_id(true);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['kullanici_adi'];
            $_SESSION['last_activity'] = time();
            return true;
        }
    }
    return false;
}

// XSS koruması için input temizleme
function temizleInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Session kontrolü
function sessionKontrol() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: girisyap.php");
        exit();
    }
    
    // Session timeout kontrolü
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > SESSION_LIFETIME)) {
        session_unset();
        session_destroy();
        header("Location: girisyap.php?message=oturum_suresi_doldu");
        exit();
    }
    
    $_SESSION['last_activity'] = time();
}

// CSRF token oluşturma
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// CSRF token kontrolü
function checkCSRFToken($token) {
    if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
        die("CSRF token doğrulaması başarısız!");
    }
}

// Hata mesajlarını gösterme
function showError($message) {
    return "<div class='alert alert-danger'>" . temizleInput($message) . "</div>";
}

// Başarı mesajlarını gösterme
function showSuccess($message) {
    return "<div class='alert alert-success'>" . temizleInput($message) . "</div>";
}
