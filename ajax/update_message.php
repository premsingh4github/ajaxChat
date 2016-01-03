<?php

	include('../includes/loader_ajax.php');
	
	header('Content-Type: text/html; charset=utf-8');


	if(isset($_POST['ID']))
	{
		$user_id = $db->escape($_POST['ID']);
		$message = $db->escape($_POST['message']);
		$message_id = $db->escape($_POST['message_id']);
		$cdata = $msg->update_message($user_id,$message_id, $message);
		
		$new_msg = false;
		
		if($cdata) 
		{
			include('../html_chat.php');
		} 
	}
?>