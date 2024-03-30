<?php
// Pastikan file ini dipanggil dari formulir unggahan gambar.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar"])) {
    $targetDir = "uploads/"; // Direktori tempat gambar akan disimpan
    $targetFile = $targetDir . basename($_FILES["gambar"]["name"]); // Nama file target

    // Coba unggah gambar
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile)) {
        echo "Gambar " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " telah berhasil diunggah.";
        echo "<br>";
        echo "<img src='$targetFile' alt='Gambar yang Diunggah'>"; // Tampilkan gambar yang diunggah
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah gambar.";
    }
}
?>
