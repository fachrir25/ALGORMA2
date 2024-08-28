<?php
$variabel = "Halo, dunia!";

// Menghapus variabel dari memori
unset($variabel);

// Memeriksa apakah variabel masih ada
if (!isset($variabel)) {
    echo "Variabel telah dihapus.";
} else {
    echo "Variabel masih ada.";
}
?>