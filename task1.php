<?php

//task1
echo "TASK 1","<br>";

$name="programmer";
echo "hallo","  ",$name;
print("<br>");

//task2
echo "TASK 2","<br>";

$x=5;
$y=10;
echo $x,"+",$y,"=",$x+$y,"<br>";
echo $x,"*",$y,"=",$x*$y,"<br>";
echo $x,"-",$y,"=",$x-$y,"<br>";

//task3
echo "TASK 3","<br>";

$a=1;
$b=2;
$c=3;
$d=4;
$diff=($a*$b)-($c*$d);
echo "Difference = ",$diff;
echo "<br>";

//task4
echo "TASK 4","<br>";

$N=13;
$M=12;
$LastDigitN=$N%10;
$LastDigitM=$M%10;
$sum=$LastDigitN+$LastDigitM;
print("$sum");
print("<br>");

//task5
echo "TASK 5","<br>";

$z=4569;
print("$z");
echo "<br>";
$fdigitz=(string)$z;
$o=$fdigitz[0];
if(($o%2)==0){
    print("EVEN");
}else{
    print("ODD");
}
echo"<br>";

$num2=378;
print("$num2");
echo"<br>";
$fdigitnum2=(string)$num2;
$u=$fdigitnum2[0];
if(($u%2)!=0){
    print("odd");
}else{
    print("even");
}
echo"<br>";

//task6
echo "TASK 6","<br>";

$p=15;
$t=7;
$k=3;

if($p%$k==0&&$t%$k==0){
    print("BOTH");

}else if($p%$k==0){
    print("Memo");
}else{
    print("Momo");
}
echo "<br>";
$p=22;
$t=10;
$k=2;
if($p%$k==0&&$t%$k==0){
    print("BOTH");
    
}else if($p%$k==0){
    print("Memo");
}else{
    print("Momo");
}
echo "<br>";


//task7
echo "TASK 7","<br>";

$m=39;
$number=(string)$m;
$firstD=$number[0];
$secondD=$number[1];
if($firstD%$secondD==0||$secondD%$firstD==0){
    print("YES");
}else{
    print("NO");
}
echo "<br>";
$m=79;
$number=(string)$m;
$firstD=$number[0];
$secondD=$number[1];
if($firstD%$secondD==0||$secondD%$firstD==0){
    print("YES");
}else{
    print("NO");
}
echo "<br>";







?>