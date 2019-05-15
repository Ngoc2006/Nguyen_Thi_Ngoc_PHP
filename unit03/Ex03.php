<?php

   	function kiem_tra_chuoi_palindrome($str)   
		{  
		  	if ($str == strrev($str))  
			  	return 1;  
		  	else  
			  	return 0;  
		}  
	echo kiem_tra_chuoi_palindrome('ZenttneZ')."<br>";