<?php
$filename = 'file_to_delete.txt';

if (file_exists($filename)) {
    if (unlink($filename)) {
        echo "Файл успешно удален.";
    } else {
        echo "Ошибка при удалении файла.";
    }
} else {
    echo "Файл не существует.";
}
?>