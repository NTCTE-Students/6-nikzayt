<?php
$oldName = 'old_name.txt';
$newName = 'new_name.txt';

if (!file_exists($oldName)) {
    echo "Исходный файл не существует.";
} elseif (file_exists($newName)) {
    echo "Файл с новым именем уже существует.";
} elseif (rename($oldName, $newName)) {
    echo "Файл успешно переименован.";
} else {
    echo "Ошибка при переименовании файла.";
}
?>