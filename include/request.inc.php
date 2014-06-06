<?php 
    function getParameterFromPost($name, $defaultValue="")
	{
       return $name = isset($_POST[$name])? $_POST[$name] : $defaultValue;

    };
    function getParameterFromGET($name, $defaultValue="")
	{
       return $name = isset($_GET[$name]) ? $_GET[$name] : $defaultValue;
	   	   
    };
	function parameterCheck($name,$regExp, $defaultValue="" )
	{
         return (preg_match($regExp, $name)) ?  $name : $defaultValue;

    }

?>