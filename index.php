<?php
require_once 'functions.php';

/**
 * reading from post table
 */

$all_posts = posts();

$post = posts(2);

$posts = posts([1,2,3,4,5]);



