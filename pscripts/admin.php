<?php
if(!check_is_ajax()){

	send404();

} else {

	if(count($_POST)){

		$input = new \rexstaffing\uFlex\Collection($_POST);

		$input->filter('Username', 'name', 'firstname', 'lastname', 'Email', 'Password', 'Password2', 'groupid', 'type');

		$user->register($input);

		header('Content-Type: application/json');
		echo json_encode(
			array(
				'error'   => $user->log->getErrors(),
				'confirm' => 'User Registered Successfully.',
				'form'    => $user->log->getFormErrors(),
			)
		);

	}

}
