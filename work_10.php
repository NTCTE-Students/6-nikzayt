<?php
$filename = 'output.csv';
$data = [
    ['Имя', 'Возраст', 'Город'],
    ['Алексей', 25, 'Москва'],
    ['Мария', 30, 'Санкт-Петербург']
];

$handle = fopen($filename, 'w');

foreach ($data as $row) {
    fputcsv($handle, $row);
}

fclose($handle);
echo "Данные успешно записаны в CSV-файл.";
?>