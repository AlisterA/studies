<?php
    function getUsersParameters($email, $name)
	{
   		if(file_exists($name))
		{   
		    $file = fopen($name, 'r');
		    $userParameters = array();
		    $i=0;
		    while (!feof($file))
            {
			    $i = $i+1;
                $text = fgets($file);
				$str = explode(":", $text);			
			    array_push($userParameters, $str[1]);
            }
			return $userParameters;
			fclose($file);
		}
		else
		{
		    $str = "Data were not found";
			return $str;
		}	
	}
	


?>