<?php

include('inc/functions.php');
require('inc/database.class.php');
require('inc/PHPMailerAutoload.php');
require('creds.php');
require('helpers.php');
include('auth/autoload.php');
date_default_timezone_set('Asia/Manila');

//Instantiate the uFlex User object
$user = new \rexstaffing\uFlex\User();

$user->config->database->host = CONS_SERVERCONN;
$user->config->database->user = CONS_USER_NAME;
$user->config->database->password = CONS_PASSWORD;
$user->config->database->name = CONS_DATABASE; //Database name
$user->start();