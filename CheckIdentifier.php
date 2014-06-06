<?php
    header('Content-type: text/plain');
	require_once('include/common.inc.php');
    if(!isset($_GET['identifier']) || empty($_GET['identifier']))
	{
        echo 'nothing is entered';
    } 
	else 
	{
	    $identifier = $_GET['identifier'];
		$first = checkFirstSimbol($identifier, '/[^\W\d_]/');
		if($first == true)
		{ 
		    $answer = checkSimbol($identifier, '/^[a-zA-Z0-9]/');
		}
		else
		{
		    echo "The first character must be a letter";
		}	
	}
?>