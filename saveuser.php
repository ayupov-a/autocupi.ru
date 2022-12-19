<?php
session_start();
include_once 'boot.php';

$stmt = pdo()->prepare("SELECT * FROM users WHERE email = :email");
$stmt->execute(['email' => $_POST['email']]);
if ($stmt->rowCount() > 0) {
    flash('Эта почта уже занята.');
    header('Location: register.php'); // Возврат на форму регистрации
    die; // Остановка выполнения скрипта
}
// Добавим пользователя в базу
$stmt = pdo()->prepare("INSERT INTO users(email, firstname, name, pass, phone, sex) VALUES (:email, :firstname, :name, :pass, :phone, :sex)");
$stmt->execute([
    'email' => $_POST['email'],
    'firstname' => $_POST['firstname'],
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
    'sex' => $_POST['sex'],
    'pass' => password_hash($_POST['pass'], PASSWORD_DEFAULT),
]);
header('Location: auth-form.php');