<?php
$input = $_POST;
$dsn = 'mysql:host=localhost;port=3306;dbname=taiwanliuxue;charset=utf8';
$user = 'root';
$password = '';
$db = new PDO($dsn, $user, $password);
//连接数据库

$sql = 'INSERT INTO `article` (`Author`, `Title`, `Content`) VALUES (' . '\'' . $input['author'] . '\',\'' . $input['title'] . '\',\'' . $input['content'] . '\');';

$stmt = $db -> query($sql);
//执行SQL
$ID = $db -> lastInsertId();
//获得自增id

if (!empty($ID)) {
	$notice = '保存成功';
} else {
	$notice = '出错了';
}
$d = array();
$d['notice'] = array('msg' => $notice, );
require_once __DIR__ . '/notice.html';
