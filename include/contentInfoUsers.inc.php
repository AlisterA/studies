<?php	

	function changeContent($content, $email, $name)
	{   
	    $userParameters = getUsersParameters($email, $name);
		$first_name = trim($userParameters[0]); 
        $last_name = trim($userParameters[1]);
        $email = trim($userParameters[2]);
        $re_email = trim($userParameters[3]);
        $password = trim($userParameters[4]);
        $select_sex = trim($userParameters[5]);
        $bithdayData=getBirthdayData(trim($userParameters[6]));
        $month = $bithdayData[1];
        $day = $bithdayData[0];
        $year = $bithdayData[2];
	    $content = changePartContentField($content,'first_name', $first_name);  
        $content = changePartContentField($content,'last_name', $last_name); 
        $content = changePartContentField($content,'email', $email); 
        $content = changePartContentField($content,'re_email', $re_email); 
        $content = changePartContentField($content,'password', $password); 
		$content = changeSelectSex($content, $select_sex);
		$content = changeMonth($content, $month, "id=\"month0\">Month:</option>");
		$content = changeDay($content, $day, "id='day0'>Day:</option>");
		$content = changeYear($content, $year, "id='year0'>Year:</option>");
		return $content;
	}
?>  