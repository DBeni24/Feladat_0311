<?php
$tomb=array(3, 1, 1, 4, 11);

$indexMax=count($tomb)-1;
for($i=0;$i<$indexMax; $i++)
{
    if(5<$tomb[$i] && $tomb[$i]<=9)
    {
        $vanE = true;
    }
}

if($vanE)
{
    print_r("Van benne olyan szám");
    print "<br>";
}
else
{
    print_r("Nincs benne olyan szám");
    print "<br>";
}








