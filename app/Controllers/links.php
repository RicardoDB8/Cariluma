<?php

$title = 'Proyectos';

$dsn = 'mysql:host=127.0.0.1; dbname=cariluma; charset=utf8mb4';
$pdo = new PDO($dsn,'ricardo', 'NuevaClave123!');

$links = $pdo->query('SELECT * FROM links ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);

require __DIR__ . '/../../resources/links.template.php';