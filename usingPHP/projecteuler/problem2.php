<?php
$serief[]=array();
$serieEven[]=array();
$serief[0]=1;
$serief[1]=1;
$i=1;
while($serief[$i-1]+$serief[$i]<4000000){
         array_push($serief,$serief[$i-1]+$serief[$i]);

$i++;
}
foreach($serief as $item){
    if($item%2==0){
        array_push($serieEven,$item);

    }
}
echo "The sum of the even numbers is " . array_sum($serieEven);
?>
