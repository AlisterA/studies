<?php
    header('Content-type: text/plain');
    if(!isset($_GET['text']) || empty($_GET['text']))
	{
        echo 'Unidentified text';
    } 
	else 
	{
	    $text = preg_replace('/\s{2,}/', ' ', $_GET['text']);
	    $text = trim($text);
		echo "!" . $text . "!";
	}//string function
?>