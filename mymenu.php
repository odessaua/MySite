<?php
$array = ['Main Page' => 'index.php', 'About Us'=>'aboutus.php', 'Contacts'=>'contacts.php', 'Service'=>'service.php', 'Reviews'=>'reviews.php'];
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Menu</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="menu">
		<ul>
<?php
foreach ($array as $key=>$value) {
	echo "<li><a href=".$value.">".$key."</a></li>";

}
?>	
	</ul>
	</div>
</body>
</html>