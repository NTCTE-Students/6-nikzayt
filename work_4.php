<?php
$filename = 'example.txt';

if (file_exists($filename)) {
    $lines = file($filename);
    $count = count($lines);
    echo "Количество строк в файле: $count";
} else {
    echo "Файл не существует.";
}
?>