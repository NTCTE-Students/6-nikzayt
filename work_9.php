<?php
$filename = 'data.csv';

if (file_exists($filename)) {
    echo "<table border='1'>";
    if (($handle = fopen($filename, 'r')) !== false) {
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            echo "<tr>";
            foreach ($data as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
        }
        fclose($handle);
    }
    echo "</table>";
} else {
    echo "Файл не существует.";
}
?>