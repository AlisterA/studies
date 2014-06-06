<?php 
    function getLength($name)
    {
	    return $name = strlen($name);
	};
	function getValue($name, $regExp)
	{
	    $str = preg_replace($regExp, '', $name);
		$str = empty($str) ? 0 : 4*getLength($str);
		return $str;
	}
	function getValueCase($name, $regExp)
	{
	    $str = preg_replace($regExp, '', $name); 
        if(empty($str))
        {
            $str = 0;
        }
        else
        {
            $str = strlen($str); 
            $str = (strlen($name)-$str)*2;
        }; 
		return $str;
	}
	function getValueNumLet($name, $regExp)
	{
	    $str = preg_replace($regExp, '', $name);
		return $str = (getLength($str) == getLength($name)) ? -getLength($str) : 0;
	}
	function getRepeatSimbol($name)
	{
	    $str = 0;
	    foreach (count_chars($name, 1) as $i => $val) 
	    	{
                if($val > 1) 
                {
                    $str = -($str + $val);
                } 
            };
		return $str;
	}
?>