<!DOCTYPE html>
<html>

	<?php
	$input = $_GET;
	$ID = $input['ID'];
	$file = './article.json';
	if (file_exists($file)) {
		$tmp = file_get_contents($file);
		if (!empty($tmp)) {
			$article = json_decode($tmp, true);
			$article = $article[$ID - 1];
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
		<h1><?=$article['Title'] ?></h1>
        <div>作者：<?=$article['Author'] ?></div>
        <div><?=nl2br($article['Content']) ?>
        </div>
	</body>

</html>