<?php
$filename = 'example.txt';

if (file_exists($filename) {
    $content = file_get_contents($filename);
    echo "<pre>$content</pre>";
} else {
    echo "Ошибка: файл $filename не существует.";
}
?>