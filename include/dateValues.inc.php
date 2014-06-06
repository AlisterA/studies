<?php
    function getDateValue($from, $to)
    {
        $str=array();
        for($i=$from;$i<=$to;$i++)
        {
            $str[] = '<option value="'.$i.'"></option>';			
        }
		echo $str;
    }
	

?>