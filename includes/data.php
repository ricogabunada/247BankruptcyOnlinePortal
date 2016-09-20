<?php

$db = new database();
$db->connect();


$id = $_SESSION['userData']['data']['id'];
$fullname = $_SESSION['userData']['data']['firstname'].' '.$_SESSION['userData']['data']['lastname'];
$firstname = $_SESSION['userData']['data']['firstname'];
$lastname = $_SESSION['userData']['data']['lastname'];
$username = $_SESSION['userData']['data']['username'];
$email = $_SESSION['userData']['data']['email'];

if($_SESSION['userData']['data']['groupid'] == 1){
	$user_role = "ADMIN";
} else {
	$user_role = "OFFICE STAFF";
}

?>
