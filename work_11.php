<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxSize = 2 * 1024 * 1024; // 2 МБ
    
    if (!in_array($_FILES['file']['type'], $allowedTypes)) {
        echo "Ошибка: разрешены только изображения JPG, PNG и GIF.";
    } elseif ($_FILES['file']['size'] > $maxSize) {
        echo "Ошибка: размер файла не должен превышать 2 МБ.";
    } else {
        $target = 'uploads/' . basename($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
            echo "Файл успешно загружен.";
        } else {
            echo "Ошибка при загрузке файла.";
        }
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" value="Загрузить">
</form>