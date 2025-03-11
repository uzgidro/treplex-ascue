<?php
// Создаем массив данных
$data = array(
    "name" => "John Doe",
    "age" => 30,
    "email" => "john.doe@example.com"
);

// Преобразуем массив в JSON строку
$jsonData = json_encode($data);

// Возвращаем JSON строку клиенту
echo $jsonData;
