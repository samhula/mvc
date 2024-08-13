<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo assetCSS("main.css")?>">
	<title>404 Page not found</title>
</head>
<body>
	<h1>404 Page not found</h1>
	<div>Uh oh! You are looking for a resource that could not be found!</div>
	<?php print_r(explode("/", trim($_SERVER['REQUEST_URI']))); ?>
</body>
</html>