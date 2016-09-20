<?php

/**
 * Prints a string in an HTML header tag
 * @param string $txt - Text of the message
 * @param int    $s - The HTML header level
 */
function p($txt, $s = 3)
{
    if (is_array($txt)) {
        aPrint($txt);
        return;
    }
    echo "<h{$s}>{$txt}</h{$s}>";
}


/**
 * Prints an array in a readable form
 * @param array $a
 */
function aPrint(array $a)
{
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

/**
 * Redirects the user
 *
 * @param bool|string $url
 * @param int         $time
 */
function redirect($url = false, $time = 0)
{
    $url = $url ? $url : $_SERVER['HTTP_REFERER'];

    if (!headers_sent()) {
        if (!$time) {
            header("Location: {$url}");
        } else {
            header("refresh: $time; {$url}");
        }
    } else {
        echo "<script> setTimeout(function(){ window.location = '{$url}' }," . ($time * 1000) . ")</script>";
    }
}

/**
 * Gets a content of a GET variable either by name or position in the path
 * @param $index
 *
 * @return mixed
 */
function getVar($index)
{
    $tree = explode("/", @$_GET['path']);
    $tree = array_filter($tree);

    if (is_int($index)) {
        $res = @$tree[$index - 1];
    } else {
        $res = @$_GET[$index];
    }
    return $res;
}

/**
 * Triggers a 404 error
 */
function send404()
{
    if (!headers_sent()) {
        header("HTTP/1.0 404 Not Found");
        include("templates/header.php");
        include("404.html");
        include("templates/footer.php");
        die();
    } else {
        redirect("404.html");
    }
}

/**
 * Generates HTML for a gravatar icon
 *
 * @param string $email
 * @param int    $size
 *
 * @return string
 */
function gravatar($email, $size = 80)
{
    $hash = md5($email);
    return "<img class='img-thumbnail' src='http://www.gravatar.com/avatar/{$hash}?d=monsterid&s={$size}'>";
}

//Checks is request is Ajax...
function check_is_ajax() {
  $isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
  if(!$isAjax) {
	  return '0';
  } else {
	  return '1';
  }
}

function monthsArray(){
	$months = array('RECURRING', 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEPT', 'OCT', 'NOV', 'DEC');
	return $months;
}

function months($id){
	$months = monthsArray();
	return $months[$id];
}

function dayidentity($id){

	switch($id){

		case '1':
			return $id.'st';
		break;

		case '2':
			return $id.'nd';
		break;
		case '3':
			return $id.'rd';
		break;

		default:
			return $id.'th';
		break;


	}

}

function getrowdata($id, $tablename, $idname) {
    $db = new database();
    $db->connect();

    $query = "SELECT * FROM $tablename WHERE $idname = '$id'";
    $row = $db->fetch_all_array($query);

    return $row;
}


function getrowdata_array($id, $tablename, $idname) {
    $db = new database();
    $db->connect();

    $query = mysqli_query($db->link_id, "SELECT * FROM $tablename WHERE $idname = '$id'");
    $row = mysqli_fetch_array($query);

    return $row;
}