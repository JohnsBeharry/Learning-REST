<?php
	require_once('./database.php');

	header('Content-type: application/json');
	if ( $_SERVER['REQUEST_METHOD'] === 'GET' ) {
		if ( isset($_GET['id']) ) {
			$response = array(
				'id' => 1,
				'username' => 'janedoe',
				'password' => '2343rfwdfasdfasdfs',
				'email' => 'jane@doe.com'
			);
		} else {
			$response = array(
				array(
					'id' => 1,
					'username' => 'janedoe',
					'password' => '2343rfwdfasdfasdfs',
					'email' => 'jane@doe.com'
				),
				array(
					'id' => 2,
					'username' => 'peter',
					'password' => 'lu4h35br4rfef',
					'email' => 'peter@doe.com'
				),
			);
		}
	}
	elseif ( $_SERVER['REQUEST_METHOD'] === 'PUT' ) {

	}
	elseif ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
		$response = array(
			'message' => 'new user added with the following details',
			'posted_data' => $_POST
		);
		//insert_user($_POST);
	}
	elseif ( $_SERVER['REQUEST_METHOD'] === '\DELETE' ) {

	}
	else {
		http_response_code(403);
		$response = array(
			'message' => 'not allowed'
		);
	}

	echo json_encode($response);

?>
