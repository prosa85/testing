<?php
$varsplit = array();
$varsplit2 = array();
$save=0;
for ($i=1000;$i>99; $i--){
	 for ($w=1000; $w>99; $w--){
		  $num = $i * $w;
		  $varsplit = str_split($num);
		  $varsplit2 = array_reverse($varsplit);
		  if($varsplit == $varsplit2){

		   if ($num>$save){
			   $save = $num;
			   echo $num. " i " . $i . " w ".$w."<br>" ;
			   print_r ($varsplit);
			   echo "<br>";
			   print_r ($varsplit2);
			   echo "<br>";
		   }
		  }

	}

}
?>
