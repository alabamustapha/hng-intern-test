<?php

require_once 'database.php';

function posts($ids = null, $link = connect()){
	
	$query = "SELECT * ALL FROM `posts`";

	$query .= is_null($ids) ? " WHERE id in {$ids}" : '';

	$query .= " ORDER BY `created_at` DSC";

}