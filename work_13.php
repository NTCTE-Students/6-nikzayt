<?php
$filename = 'data.json';

if (file_exists($filename)) {
    $json = file_get_contents($filename);
    $data = json_decode($json, true);
    
    // Добавляем новый элемент
    $newItem = [
        'id' => count($data) + 1,
        'name' => 'Новый элемент',
        'value' => rand(1, 100)
    ];
    $data[] = $newItem;
    
    // Сохраняем обратно
    file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
    echo "Данные успешно обновлены.";
} else {
    echo "Файл не существует.";
}
?>