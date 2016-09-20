<?php
if(!check_is_ajax()){

	send404();

} else {

	if(count($_POST)){

		$db = new database();
		$db->connect();

		print_r($_POST);

		$id = $_POST['id'];

		$data['firstname'] = $_POST['firstname'];
		$data['lastname'] = $_POST['lastname'];
		$data['username'] = $_POST['Username'];
		$data['email'] = $_POST['Email'];

		echo $db->query_update('users', $data, "id = '$id'");

		//reset session
		$_SESSION['userData']['data']['firstname'] = $_POST['firstname'];
		$_SESSION['userData']['data']['lastname'] = $_POST['lastname'];
		$_SESSION['userData']['data']['username'] = $_POST['Username'];
		$_SESSION['userData']['data']['email'] = $_POST['Email'];


	}

}
