<?php

$pageTitle = "Criterion Collection Library";
$section = null;

include("inc/header.php"); 

//library file
$string=file_get_contents('inc/lib3.json', true);
$json_a=json_decode($string,true);
$json_o=json_decode($string);

// array method
foreach($json_a['movies'] as $p)
{
echo '
	<div class="box">
		<img src="'.$p[img].'">
		<p class="title">'.$p[title].'<p>
		<a href="'.$p[directorlink].'">' .$p[director].'</a>
		<p><input type="checkbox"/></p>
	</div>
';}
?>

<?php include("inc/footer.php"); ?>
