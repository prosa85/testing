<?php //print the first 1000 primes
$prime = array(1,2);
while(count($prime)<1000){
    $num = gmp_nextprime(end($prime));
    array_push($prime, gmp_strval($num));
}
$i=1;
foreach($prime as $item){
echo  $i. " : ". $item." <br>";
   $i++;

}
