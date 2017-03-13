<!DOCTYPE html>
<html>
<head>
	<title>Latihan MVC dengan PSR-4</title>
</head>
<body>

<?php echo $this->loadView('menu'); ?>

<?php

if (isset($content)){
	echo $content;
}

?>

</body>
</html>