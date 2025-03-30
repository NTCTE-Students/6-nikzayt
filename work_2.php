<?php
$filename = 'output.txt';
$data = "Hello, World!";

$result = file_put_contents($filename, $data);

if ($result !== false) {
    echo "Данные успешно записаны в файл.";
} else {
    echo "Ошибка при записи в файл.";
}
?>