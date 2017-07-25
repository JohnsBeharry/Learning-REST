<?

/*

	Users

	POST /api/users
	GET /api/users
	GET /api/users/@id
	PUT /api/users/@id
	DELETE /api/users/@id

*/

Flight::route('GET /users', function(){
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
	echo json_encode($response);
});

Flight::route('GET /users/@id', function($id){
	$response = array(
		'id' => 1,
		'username' => 'janedoe',
		'password' => '2343rfwdfasdfasdfs',
		'email' => 'jane@doe.com'
	);
	echo json_encode($response);
});

Flight::route('PUT /users/@id', function($id){
});

Flight::route('DELETE /users/@id', function($id){
});
?>
