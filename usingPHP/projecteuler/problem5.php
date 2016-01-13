<?php
/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/
$numbers= array(2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$num = 60;

do
{
	foreach($numbers as $div){
		if(fmod($num,$div) != 0){
			$num += 60;
			$divAll = false;
			break;
		}else
		{
			$divAll = true;
		}
	}

} while (!$divAll);
	echo $num."<br>";
foreach($numbers as $div){
		echo $num. "% ".$div." = ".$num / $div."<br>";

	}
?>
