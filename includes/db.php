<?php
$db['db_host'] = 'localhost';
$db['db_username'] = 'root';
$db['db_password'] = 'root';
$db['db_name'] = 'cms';
foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}
$con = mysqli_connect($db['db_host'],$db['db_username'],$db['db_password'],$db['db_name']);
if ($con) {
} else {
	die('Error');
}
?>