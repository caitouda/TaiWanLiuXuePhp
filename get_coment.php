<!DOCTYPE html>
<html>

	<?php
	$input = $_GET;
	$id = $input['id'];
	$file = './articles.json';
	if (file_exists($file)) {
		$tmp = file_get_contents($file);
		if (!empty($tmp)) {
			$articles = json_decode($tmp, true);
			$article = $articles[$id - 1];
		}
	}
	?>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/discussstyle.css" rel="stylesheet">
	</head>

	<body>
		<h1><?=$coment['title'] ?></h1>
        <div>作者：<?=$coment['author'] ?></div>
        <div><?=nl2br($coment['content']) ?>
        </div>
	</body>

</html>