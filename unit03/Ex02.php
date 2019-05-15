<?php 

function mb_ucwords($str)
	{
		return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
	}	
$str="vŨ văN thƯơNg";
$str = mb_ucwords($str);
echo $str . ".";