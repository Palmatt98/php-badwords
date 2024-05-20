<?php
$badword = $_GET["badword"];
$paragraph = $_GET["paragraph"];

$paragraph_censured = str_replace($badword, "***", $paragraph);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	
	<p>Paragrafo: <?php echo $paragraph ?></p>
	<p>Lunghezza paragrafo: <?php echo strlen($paragraph) ?></p>
	<p>Paragrafo censurato: <?php echo $paragraph_censured ?> </p>
</body>

</html>