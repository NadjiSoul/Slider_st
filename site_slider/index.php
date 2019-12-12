<!-- <?php


var_dump($m);
// $slider = $m->site_slider->find();
$filter = [
	'_id' => $id,
	'title' => $title,
	'image' => $image,
];
?> -->
<?php
$mongo = new MongoDB\Driver\Manager();
$filter = ['id' => 2];
$query = new MongoDB\Driver\Query($filter);
$rows = $mongo->executeQuery('site_slider.slider', $query); // $mongo contains the connection object to MongoDB
foreach($rows as $r){
   print_($r);
}
?>>
<!DOCTYPE html>
<html lang="fr" dir="rtl">
<head>
	<meta charset="utf-8">
	<title>Site Slide</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div>
			<img src="">
			<img src="">
		</div>
		<nav>
			<ul>
				<a href=""><li>Accueil</li></a>
				<a href=""><li>Revue</li></a>
				<a href=""><li>Blog</li></a>
				<a href=""><li>Contact</li></a>
			</ul>
		</nav>
		<div id="slider">
			<div>
				<h2></h2>
				<img src="">
			</div>
		</div>
	</header>
</body>
</html>