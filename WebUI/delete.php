<?php
    (string)$plik = $_POST['plik'];

    unlink($plik.'.zone');
    echo "Usunięto";
    header('Location: index.php');
?>