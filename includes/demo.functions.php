<?php
	// Please Note: These are demo functions, probably you don't need all of them when you integrate
	
	// Return a list of users (used on index.php page)
	function get_users()
	{
		global $msg;
		return $msg->get_all_users();
	}	
	
	// Return profile pic (used on messages.php)
	function profile_picture($user_id, $base_url)
	{
		global $msg;
		
		$app_path = $_SERVER['DOCUMENT_ROOT'].'/messages/';

		$path = 'images/';
		$result = $msg->user_profile_picture($user_id, $base_url);
		if(file_exists($app_path.$path.$result))
		{
			return $base_url.$path.$result;	
		} else {
			return $base_url.$path.'default.jpg';	
		}
	}
?>