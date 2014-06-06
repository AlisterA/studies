<?php
    header('Content-type: text/plain');
	require_once('include/common.inc.php');
    if(!isset($_GET['email']) || empty($_GET['email']))
    {
        echo 'You must enter email!';
    } 
    else 
    {
	    $userParameters = array();
        $email = getParameterFromGET('email');
		$userParameters = getUsersParameters($email);

		$first_name = trim($userParameters[0]);
		$last_name = trim($userParameters[1]);
		$email = trim($userParameters[2]);
		$age = trim($userParameters[3]);
		$info = "First Name: " . $first_name . "\n" . "Last Name: " . $last_name 
			        . "\n" . "Email: " . $email . "\n" . "Age: " . $age ; 
	    echo $info;
    }
?>