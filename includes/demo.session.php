<?php

	////////////////////////////////////////////////////////////////////////////
	// Please Note: Do not use this session on your work, use your own session
	// This is a simulation just to demostrate the features of messages system
	////////////////////////////////////////////////////////////////////////////
	
	// Controls if isset the id of the user, else go back and set
	if(!isset($_SESSION['m_simulate_login']) && basename($_SERVER['PHP_SELF']) !== 'index.php')
	{
		header('Location: index.php');
		exit();
	} elseif(isset($_POST['user_id']) && isset($_POST['submit']) && basename($_SERVER['PHP_SELF']) == 'index.php') {
		$_SESSION['m_simulate_login'] = $_POST['user_id'];
		$msg->logged_user_id = $_SESSION['m_simulate_login']; // This is important so it can record login data
		$msg->set_user_sessionStatus('online');
		header('Location: messages.php');
		exit();	
	}
	// elseif (isset($_SESSION['m_simulate_login']) && basename($_SERVER['PHP_SELF']) !== 'messages.php') {
	// 	$msg->logged_user_id = $_SESSION['m_simulate_login']; // This is important so it can record login data
	// 	$msg->set_user_sessionStatus('online');
	// 	header('Location: messages.php');
	// 	exit();	
	// }

	
	if(isset($_GET['logout']) && $_GET['logout'] == true)
	{ 
		$msg->logged_user_id = @$_SESSION['m_simulate_login']; // This is important so it can record logout data
		$msg->set_user_sessionStatus('offline');
		$_SESSION = array();
		if(isset($_COOKIE[session_name()]))
		{
			setcookie(session_name(), '', time() - 3600);	
		}
		session_destroy();
	}
	if(isset($_POST['register'])){
		$user_name = mysql_escape_string($_POST['username']);
		$user_email = mysql_escape_string($_POST['email']);
		$user_pw = md5(mysql_escape_string($_POST['password']));
		$display_name = mysql_escape_string($_POST['display_name']);
		$sql = "INSERT INTO c_user (user_name,user_email, user_pw,display_name) VALUES ('$user_name','$user_email','$user_pw','$display_name')";
		 if($db->query($sql)){
		 	$success = "Your registration success";
		 }else{
		 	$error = $db->error();
		 }
	}
	if(isset($_POST['login'])){
		$username = mysql_escape_string($_POST['username']);
		$password = md5(mysql_escape_string($_POST['password']));
		if(@$msg->login($username,$password)['id'] > 0){

			$_SESSION['m_simulate_login'] = $msg->login($username,$password)['id'] ;
			$msg->logged_user_id = $_SESSION['m_simulate_login']; // This is important so it can record login data
			$msg->set_user_sessionStatus('online');
			header('Location: messages.php');
			exit();
		}
		elseif (@$msg->login($username,$password) =='housefull') {
			$error ="Chat room is full!Plz try later";
		}
		
		else{
			$login_error = 1;
		}
		
	}
	
?>