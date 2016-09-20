<?php
error_reporting(~E_NOTICE);

$base = dirname($_SERVER['PHP_SELF']);
$pagePath = substr($_SERVER['REQUEST_URI'], strlen($base));

include('includes/config.php');
include('includes/data.php');

// Remove any URI variables
$pagePath = explode('?', $pagePath);
$pagePath = $pagePath[0];

// Trim any leading forward slash
$pagePath = trim($pagePath,"/");

if ( ! $pagePath )
{
  $pagePath = 'dashboard';
}

switch($pagePath){

  case 'logout':

    $user->logout();
    redirect("./");
    exit();

  break;

  case 'register':

    $user->logout();
    require('pages/register.php');
    exit();

  break;

}

$pageInclude = "pages/$pagePath.php";
$pageIncludeAjax = "pscripts/$pagePath.php";


$pageTitle = str_replace('/', ' ', $pagePath);
$pageTitle = ucfirst($pageTitle);

if(!$user->isSigned())
{

  require('pages/login.php');
  exit();

}


if(check_is_ajax()){

  require($pageIncludeAjax);

} else {

    require('templates/header.php');
    require('templates/sidebar.php');
    require($pageInclude);
    require('templates/footer.php');

}
