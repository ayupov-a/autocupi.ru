<?php
require_once __DIR__. '/boot.php';

$stmt = pdo()->prepare("UPDATE catalog SET booked = null, user_id = 0 WHERE id = :car_id");
$stmt->execute(['car_id' => $_GET['id']]);
header('Location: profile.php');