<?php
class classtest{
  public function n1()
    {
        return ("testing n1");
    }

    function n2($vtest)
    {
        return("hola".$vtest);
    }

}
$ob1= new classtest();
var_dump($ob1);

?>
