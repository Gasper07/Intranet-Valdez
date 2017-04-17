<?php 
require('lib/Pusher.php');

// Change the following with your app details:
// Create your own pusher account @ https://app.pusher.com
$app_id = '309483'; // App ID
$app_key = '1699db0a3a3aec4d93c6'; // App Key
$app_secret = '17a8b609741fa2891df9'; // App Secret
$pusher = new Pusher($app_key, $app_secret, $app_id);

//Open a new connection to the MySQL server
$mysqli = new mysqli("btzb9icdm-mysql.services.clever-cloud.com", "u6v5e7r3xhfoadzq", "2ZHpKpA8lD9rvgrOIPX", "btzb9icdm");

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

// Check the receive message
if(isset($_POST['message']) && !empty($_POST['message'])) {		
	$data['message'] = $_POST['message'];	
	$Menssage = $_POST['conversation'];	
	$id_user = $_POST['id_Usuario'];	
	$id_userConversation = $_POST['id_Usuario_conversation'];	
	
	// Return the received message
	if($pusher->trigger('test_channel', 'my_event', $data)) {			
		//MySqli Insert Query
		$insert_row = $mysqli->query("INSERT INTO chats_users (id, conversations, id_user, id_user_conversation) VALUES('', '$Menssage', '$id_user', '$id_userConversation')");
		mysqli_close($mysqli);
	
		echo 'success';			
	} else {		
		echo 'error';	
	}
}