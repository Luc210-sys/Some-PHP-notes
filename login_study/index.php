<?php

	session_start();

	$login = $_POST['user'];
	$passsword = $_POST['psw'];

	$db = mysql_connect('', '', '') or die("Connection failure");

	if(mysql_num_rows(result) > 0)
	{
		$_SESSION['user'] = $login;
		$_SESSION['psw'] = $password;
		header(string);
	}
?>