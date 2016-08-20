<?php
$dsn = 'mysql:host=localhost;port=3306;dbname=taiwanliuxue;charset=utf8';
$user = 'root';
$password = '';
$db = new PDO($dsn, $user, $password);

$sql = 'SELECT `ID`, `Author`, `Title`, `Content` FROM `article` LIMIT 10';

$stmt = $db -> query($sql);
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$article = $stmt -> fetchAll();

$d = array();
$d['article'] = $article;
require_once __DIR__ . '/discuss.html';
