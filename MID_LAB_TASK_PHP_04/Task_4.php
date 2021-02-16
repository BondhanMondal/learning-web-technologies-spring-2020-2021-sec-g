<?php

	$firstNum = 10;
	$secondNum = 15;
	$thirdNum = 20;

	if($firstNum > $secondNum && $firstNum > $thirdNum)
	{
		echo($firstNum."is the largest number");
	}
	elseif($secondNum > $firstNum && $secondNum > $thirdNum)
	{
		echo($secondNum."is the largest number");
	}
	else
	{
		echo($thirdNum."is the largest number");
	}

?>