<?php
require 'db.php';
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Free Cell</title>
	<style type="text/css">
		body,html{
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
<div id="root">
	<div style="position:relative;">
		<img src="bg_green.webp" width="100%">
	</div>
</div>
</body>
<?php
$files = [
	'js/utilities.js',
	"js/layout.js",
];

foreach ($files as $file) {
	echo "<script type='text/javascript'>".file_get_contents($file)."</script>";
}
?>
</html>