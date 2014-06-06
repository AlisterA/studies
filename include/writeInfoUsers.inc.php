<?php
    function writeUsersParams($array, $email, $name)
	{
	    $name = "D:/server2go/www/day2/data/$email.txt";
		$file = fopen($name, 'w+');
        if ($file)
        {
            foreach($array as $key =>$val)
			{
			    $info = $key . $val . "\r\n";
			    fputs($file, $info);
			}
        } 
		fclose($file);
		return $message = "Your data has been written!";
	}
?>