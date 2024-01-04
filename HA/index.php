<?php
// index.php

// Подключение к базе данных
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        // Подготовка SQL-запроса для вставки данных
        $stmt = $pdo->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
        // Выполнение запроса с реальными значениями
        $stmt->execute([$name, $email, $message]);

        // Перенаправление после успешной обработки формы
        header("Location: index.php?success=true");
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
