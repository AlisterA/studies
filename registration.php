<?php 
    header('Content-type: text/plain');
	header('Content-type: text/html');
    require_once('include/common.inc.php');
     if(!isset($_POST['email']) || empty($_POST['email']))
    {
        echo 'You must enter email!';
    } 
    else 
    {    
	    $first_name = getParameterFromPost('first_name');
	    $last_name = getParameterFromPost('last_name');
	    $email = getParameterFromPost('email');
	    $re_email = getParameterFromPost('re_email');
	    $password = getParameterFromPost('password');
	    $select_sex = getParameterFromPost('select_sex');
	    $month = getParameterFromPost('month');
	    $day = getParameterFromPost('day');
	    $year = getParameterFromPost('year');
	
	    $email = mb_strtolower($email); //приводим значение строки email к нижнему регистру
	    $usersParams = array(
                'First name: '  => $first_name,
                'Last name: ' => $last_name,
		        'Email: ' => $email,
		    	'Re-enter Email: ' => $re_email,
		    	'Password: ' => $password,
		        'Select Sex: ' => $select_sex,
			    'Birthday: ' => $day . ' ' . $month . ' ' . $year
            );
		$way = "D:/server2go/www/day2/data/$email.txt";
		$message = writeUsersParams($usersParams, $email, $name);
	    $query  = "INSERT INTO userInfo(first_name)
		VALUES(first_name='$first_name');";
	}
?>