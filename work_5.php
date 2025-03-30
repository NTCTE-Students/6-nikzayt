<?php
$filename = 'example.txt';
$searchWord = 'Lorem';

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    $count = substr_count(strtolower($content), strtolower($searchWord));
    echo "Слово '$searchWord' встречается $count раз(а).";
} else {
    echo "Файл не существует.";
}
?>