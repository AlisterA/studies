<?php
    function checkFirstSimbol($str, $regExp)
	{
	    $firstSimbol = $str{0};
		return $str = preg_match($regExp, $firstSimbol) ? true : false;
	};
	
	//$key+2 ��� �������� �������������(����� ������ ������ � 1)
    function checkSimbol($str, $regExp)
	{    
	    $str = substr($str, 1);
		if(strlen($str)>1)
		{
	        $array = str_split($str);
	    	foreach ($array as $key => $val)
		    {    
		        if(!preg_match($regExp, $val))
		    	{
		    	    echo "Invalid character �" . ($key+2) . ". You need to fix character = '" . $val . "'\n";
		    	}
		    }
		}
	};
?>