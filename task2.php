<?php
//***********Question 1************ */
print("question 1");
echo "<br>";
for($s=1;$s<=5;$s++){
    echo $s,"<br>";
}
echo "----------------------------------------------------";
echo"<br>";


//***********Question 2************ */
print("question 2");
echo "<br>";
for($i=2;$i<=10;$i+=2){
    echo $i,"<br>";
}
echo "----------------------------------------------------";
echo "<br>";

//***********Question 3************ */
print("question 3");
echo "<br>";
$n1=5;
$n2=8;
while($n1!=$n2){
    if($n1>$n2){
        echo $n1,"<br>";
    }else{
        echo $n2,"<br>";
    }
    break;
}
echo "----------------------------------------------------";
echo "<br>";

//***********Question 4************ */
//not done yet
print("question 4");
echo "<br>";
$d=15;
$flag=true;
for($i=2;$i<$d;$i++){
    if($d%$i==0){
        $flag=false;
    }
}
if($flag){
    echo "prime"."<br>";
}else{
    echo "not prime". "<br>";
}
    
echo "----------------------------------------------------";
echo "<br>";



//***********Question 5************ */
print("question 5");
echo "<br>";
$f=12021;
$str=strval($f);
$str2=strrev($str);
if($str==$str2){
    echo "yes","<br>";
}else{
    echo "no","<br>";
}
echo "----------------------------------------------------";
echo "<br>";
//***********Question 6************ */
print("question 6");
echo "<br>";
$a=6;
for($i=1;$i<=$a;$i++){
    if($a%$i==0){
        echo $i,"<br>";
    }
}
echo "----------------------------------------------------";
echo "<br>";

//***********Question 7************ */
print("question 7");
echo "<br>";
$t=74;
$t1=intdiv($t,10);
$t2=$t%10;
if($t1==4||$t1==7){
    if($t2==4||$t2==7){
        echo "yes","<br>";
    }else{
        echo "no","<br>";
    }
}
echo "----------------------------------------------------";
echo "<br>";
//***********Question 8************ */
print("question 8");
echo "<br>";
$w=4;
for($c=0;$c<=$w;$c++){
    for($y=0;$y<$c;$y++){
        echo "*";
    }
    echo "<br>";
}

?>