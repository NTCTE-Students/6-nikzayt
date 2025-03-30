<?php
$source = 'source.txt';
$destination = 'destination.txt';

if (!file_exists($source)) {
    echo "Исходный файл не существует.";
} elseif (file_exists($destination)) {
    echo "Файл назначения уже существует.";
} elseif (copy($source, $destination)) {
    echo "Файл успешно скопирован.";
} else {
    echo "Ошибка при копировании файла.";
}
?>