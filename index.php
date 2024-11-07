<?php


$username1="malakehab";
$password1=1234;
$username2="malakehab";
$password2=1234;
if($username1==$username2 && $password1==$password2){
    print("welcome");
}else{
    print("error");
}
echo"<br>";



$min=10;
$max=20;
$num=15;
if($num<=$max&&$num>=$min){
    print ("in range");
}else{
    print("not in range");
}
echo"<br>";


$c='a';
if($c=='a'||$c=='i'||$c=='e'||$c=='o'||$c=='u'){
    print("yes");
}else{
    print("no");
}
echo"<br>";



$days='7';
switch($days){
    case'1':
        print("saturday");
        break;
        case'2':
            print("sunday");
            case'3':
                print("monday");
                break;
                case'4':
                    print("tuesday");
                    break;
                    case'5':
                        print("wednesday");
                        break;
                        case'6':
                            print("thursday");
                            break;
                            case'7':
                                print("friday");
                                break;
                                default:
                                print("wrong");
                                break;
}
?>