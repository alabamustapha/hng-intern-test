<?php
require_once 'functions.php';

/**
 * reading from post table
 */

$posts = posts();

//$post = posts(2); //for a single post

//$posts = posts([1,2,3,4,5]); //for some posts

while ($post = mysqli_fetch_array($posts)) {
	
	echo "<h2>" . $post['title']. "</h2>";
	echo "<p>" 	. $post['body']. "</p>";

}



