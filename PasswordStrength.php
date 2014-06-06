<?php
    header('Content-type: text/plain');
	require_once('include/common.inc.php');
    if(!isset($_GET['password']) || empty($_GET['password']))
    {
        echo 'nothing is entered';
    } 
    else 
    {
        $password = $_GET['password']; 
        if(preg_match('/^[a-zA-Z0-9]+$/', $password))
		{  
            $safety = $lenPassword = $digit = $number = $upperCase = $downСase = $letter = $sum = 0;
			$lenPassword = 4*getLength($password);
			$digit = getValue($password, '/[^0-9]/');
			$upperCase = getValueCase($password, '/[^A-Z]/');
			$downСase = getValueCase($password, '/[^a-z]/');
			$letter = getValueNumLet($password, '/[^a-zA-Z]/');
			$number = getValueNumLet($password, '/[^0-9]/');
			$sum = getRepeatSimbol($password);

            $safery = $safery + $lenPassword + $digit + $upperCase + $downСase + $letter 
			          + $number + $sum;
            echo "Password strength: " . $safery ;
        }
        else
        {
            echo "Contains invalid characters";
        }
    }
?>