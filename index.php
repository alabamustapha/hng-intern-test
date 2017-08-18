<?php
require_once 'functions.php';

/**
 * reading from post table
 */

$all_posts = posts();

$post = posts(2);

$posts = posts([1,2,3,4,5]);

while ($post = mysqli_fetch_array($posts)) {
	
	echo "<h2>" . $post['title']. "</h2>";
	echo "<p>" 	. $post['body']. "</p>";
	
}



