<?php
$coment = array();
$file = './coment.json';
if (file_exists($file)) {
	$tmp = file_get_contents($file);
	if (!empty($tmp)) {
		$coment = json_decode($tmp, true);
	}
}
$d = array();
//d 是 data的意思，后续会用到
$d['coment'] = $coment;
require_once __DIR__ . '/discuss.html';
