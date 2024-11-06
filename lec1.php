<?php

//task1
$name="programmer";
echo "hallo","  ",$name;
print("<br>");

//task2
$x=5;
$y=10;
echo $x,"+",$y,"=",$x+$y,"<br>";
echo $x,"*",$y,"=",$x*$y,"<br>";
echo $x,"-",$y,"=",$x-$y,"<br>";

//task3
$a=1;
$b=2;
$c=3;
$d=4;
$diff=($a*$b)-($c*$d);
echo "Difference = ",$diff;
echo "<br>";

//task4
$N=13;
$M=12;
$LastDigitN=$N%10;
$LastDigitM=$M%10;
$sum=$LastDigitN+$LastDigitM;
print("$sum");
print("<br>");

//task5
$z=4569;
$fdigitz=$z[0];
if($fdigitz%2==0){
    print("EVEN");
}else{
    print("ODD");
}
$fdigits=$s[0];
$s=3569;
if($fdigits%2==0){
    print("EVEN");
}else{
    print("ODD");
}

//task6
//needs changes
$p=15;
$t=7;
$k=3;
if(($p&&$t)%$k==0){
    print("BOTH");

}elseif($p%2==0){
    print("Memo");
}else{
    print("Momo");
}
echo "<br>";
$p=22;
$t=10;
$k=2;
if(($p&&$t)%$k==0){
    print("BOTH");
    
}elseif($p%2==0){
    print("Memo");
}else{
    print("Momo");
}

//task7








?>