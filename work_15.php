<?php
$sourceFile = 'source.txt';
$outputFile = 'output.txt';
$search = 'старое';
$replace = 'новое';

if (file_exists($sourceFile)) {
    $content = file_get_contents($sourceFile);
    $newContent = str_replace($search, $replace, $content);
    file_put_contents($outputFile, $newContent);
    echo "Замена выполнена. Результат сохранен в $outputFile";
} else {
    echo "Исходный файл не существует.";
}
?>