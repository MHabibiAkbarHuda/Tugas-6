<?php
function inputEmail() {
        echo "Masukkan Email Anda: ";  
    return readline(); 
}
function inputPassword() {
        echo "Masukkan Password Anda: "; 
    return readline();
}
function cekLogin($email, $password, $storedEmail, $storedPassword) {
    if ($email === $storedEmail && $password === $storedPassword) {
        return true;
    } else {
      return false; }
}
        echo "Masukkan Email untuk Login: ";
    $storedEmail = readline();
        echo "Masukkan Password Login: ";
    $storedPassword = readline();
        echo "\n--- Terkirim ---\n";
    $email = inputEmail();
    $password = inputPassword();
    if (cekLogin($email, $password, $storedEmail, $storedPassword)) {
        echo "Login berhasil!\n";
        echo "Selamat Datang Kembali!\n";
} else {
        echo "Email atau Password salah. Silahkan coba lagi.\n";
}
?>