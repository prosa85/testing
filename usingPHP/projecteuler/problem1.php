<?php
$num = array();
for($i=1; $i<=999; $i++){
      if($i % 5==0){
        array_push($num,$i);
      }
    elseif($i % 3==0){
       array_push($num,$i);

        }
}
echo array_sum($num);
?>
