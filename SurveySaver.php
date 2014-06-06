<?php
    header('Content-type: text/plain');
	require_once('include/common.inc.php');
	
    if(!isset($_GET['email']) || empty($_GET['email']))
    {
        echo 'You must enter email!';
    } 
    else 
    {         
	    $first_name = getParameterFromGET('first_name');
        $last_name = getParameterFromGET('last_name');
        $email = getParameterFromGET('email');
        $age = getParameterFromGET('age');
		$usersParams = array(
            'First name: '  => $first_name,
            'Last name: ' => $last_name,
		    'Email: ' => $email,
		    'Age: ' => $age
        );
        $name = "D:/server2go/www/day2/data/$email.txt";
		$message = writeUsersParams($usersParams, $email, $name);
		echo $message;
    }
?>