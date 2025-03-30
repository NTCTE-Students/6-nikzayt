<?php
$sourceDir = 'files/';
$backupDir = 'backups/' . date('Y-m-d') . '/';

if (!file_exists($backupDir)) {
    mkdir($backupDir, 0777, true);
}

$files = scandir($sourceDir);
$copied = 0;

foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        if (copy($sourceDir . $file, $backupDir . $file)) {
            $copied++;
        }
    }
}

echo "Создана резервная копия $copied файлов в $backupDir";
?>