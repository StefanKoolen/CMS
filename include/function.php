<?php
function getPosts(){
	require ("./include/connect.php");
	$query = mysql_query("SELECT * FROM cms_posts ORDER BY id DESC") or die(mysql_error());
	while ($row = mysql_fetch_assoc($query)) {
		
		$title = $row['title'];
		$author = $row['author'];
		$body = $row['body'];

		echo "<h2>$title</h2><p><i>Written by: $author.</i></p><p>$body</p>";

	}
} //End of getPosts Function

function getCats(){

	require ("./include/connect.php");
	$query = mysql_query("SELECT * FROM cms_cats") or die(mysql_error());
	while ($row = mysql_fetch_assoc($query)){

		$general = $row['general'];
		$tutorial = $row['tutorial'];

		echo "<h2>Categories</h2><p>$general</p><p>$tutorial</p>";

	}

} //End of getCats Function

?>