<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<body>
<?php
 require_once __DIR__.'/../../init.php';
 $name = $request->get('name', 'World'); ?>
 
	<h2>Hello <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></h2>
<!-- 	<?php echo $foo; ?> -->
</body>
</html>
