<?php
	
	function changePartContentField($str, $name, $param)
    {
        return $str = substr_replace($str, " value=\"{$param}\"", strpos($str, "name=\"".$name."\""), 0);
       
    }
	
	function changeSelectSex($str, $param)
    {
        return $str = substr_replace($str, " selected='selected'", strpos($str, "value=\"{$param}\""), 0);
    }
	
	function changeMonth($str, $param, $line)
	{  
	    $month = array('Jan', "Feb", "Mar", "Apr", "May", "Jun",
				  	    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
		$month_options .= "<option selected value='0'>Month:</option>"; 
        foreach($month as $val)
        {
		    $month_options .= "<option value=\"{$val}\">{$val}</option>"; 
            if ($val == $param && $param!=0) 
            {
                $month_options .= "<option selected value=\"{$val}\">{$val}</option>"; 
            }
        }
		return $str = substr_replace($str, $month_options, strpos($str, $line), 0);
	}
	
	function changeDay($str, $param, $line)
	{
	    $day_options .= "<option value='0'>Day:</option>"; 
	    for($day = 1; $day <= 31; $day++)
		{
            $day_options .= "<option value=\"{$day}\">{$day}</option>"; 
			if ($day == $param) 
            {
                $day_options  .= "<option selected value=\"{$day}\">{$day}</option>"; 
            }			
        }
		return $str = substr_replace($str, $day_options, strpos($str, $line), 0);
	}
	
	function changeYear($str, $param, $line)
	{
	    $year_options .= "<option value='0'>Year:</option>"; 
	    for($year = 1920; $year <= 2014; $year++)
		{
            $year_options .= "<option value=\"{$year}\">{$year}</option>"; 
			if ($year == $param) 
            {
                $year_options  .= "<option selected value=\"{$year}\">{$year}</option>"; 
            }
        }
		return $str = substr_replace($str, $year_options, strpos($str, $line), 0);
	}
?>