<?php
$logFile = 'app.log';
$message = "Произошло важное событие";
$logEntry = date('Y-m-d H:i:s') . " - $message\n";

file_put_contents($logFile, $logEntry, FILE_APPEND);
echo "Запись добавлена в лог-файл.";
?>