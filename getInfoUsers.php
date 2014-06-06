<?php
    header('Content-type: text/plain');
    header('Content-type: text/html');
    require_once('include/common.inc.php');
    $file['yes'] = 'form3.php';

    if (!isset($_POST['email']) || empty($_POST['email'])) 
	{
        echo 'You must enter email!';
    }
    else 
	{
        $userParameters = array();
        $email = $_POST['email'];
        $name = "D:/server2go/www/day2/data/$email.txt";
        $content = file_get_contents($file['yes']);
        $content = changeContent($content, $email, $name);
        echo $content;    
    }
	
	
	function getBirthdayData($param)
	{
	    $bithdayData = array();
        return $bithdayData = explode(" ", $param);
	}

?>