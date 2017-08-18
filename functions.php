<?php

require_once 'database.php';

function posts($ids = []){
	$link = connect_db();

	$query = "SELECT * FROM `posts`";

	
	if($ids){
		if(is_array($ids)){
			$ids = join("','",$ids);   
			$query .= " WHERE `id` in ('$ids')";
		}else{
			$query .= " WHERE `id` = '{$ids}'";
		}
		
		
	}
	

	$query .= " ORDER BY `created_at`";

	$results = mysqli_query($link, $query);

	return $results;

}