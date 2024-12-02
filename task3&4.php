<?php


class Author {
    protected $name;
    protected $email;
    protected $gender;

    function __construct($name = "authorName", $email = "authorEmail", $gender = "F/M") {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getEmail() {
        return $this->email;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function getGender() {
        return $this->gender;
    }

    function toString() {
        return "Author: [Name: {$this->name}, Email: {$this->email}, Gender: {$this->gender}]";
    }
}

class Book extends Author {
    private $bname;
    private $price;
    private $qty;

    function __construct($name = "authorName", $email = "authorEmail", $gender = "F/M", $bname = "bookName", $price = 0, $qty = 0) {
        parent::__construct($name, $email, $gender);
        $this->bname = $bname;
        $this->price = $price;
        $this->qty = $qty;
    }

    function setBname($bname) {
        $this->bname = $bname;
    }

    function getBname() {
        return $this->bname;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function getPrice() {
        return $this->price;
    }

    function setQty($qty) {
        $this->qty = $qty;
    }

    function getQty() {
        return $this->qty;
    }

    function toString() {
        $parentDetails = parent::toString();
        return "{$parentDetails}, Book: [Name: {$this->bname}, Price: {$this->price}, Quantity: {$this->qty}]";
    }
}


$a = new Author("Ahmed", "ahmed@gmail.com", "M");
echo $a->toString() . "<br>";

$b = new Book("Ahmed", "ahmed@gmail.com", "M", "Love Story", 900, 4);
echo $b->toString();




echo "<br>";

echo "________________________________________________________________________________<br><br>";






class Author1 {
    protected $name;
    protected $email;
    protected $gender;

    function __construct($name = "authorName", $email = "authorEmail", $gender = "F/M") {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getEmail() {
        return $this->email;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function getGender() {
        return $this->gender;
    }

    function toString() {
        return "Author: [Name: {$this->name}, Email: {$this->email}, Gender: {$this->gender}]";
    }
}

class Book1 {
    private $bname;
    private $price;
    private $qty;
    private $authors = []; // Array to hold one or more Author objects

    function __construct($bname = "bookName", $price = 0, $qty = 0, $authors = []) {
        $this->bname = $bname;
        $this->price = $price;
        $this->qty = $qty;

        
        foreach ($authors as $author) {
            if ($author instanceof Author1) {
                $this->authors[] = $author;
            }
        }
    }

    function setBname($bname) {
        $this->bname = $bname;
    }

    function getBname() {
        return $this->bname;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function getPrice() {
        return $this->price;
    }

    function setQty($qty) {
        $this->qty = $qty;
    }

    function getQty() {
        return $this->qty;
    }

    function addAuthor($author) {
        if ($author instanceof Author1) {
            $this->authors[] = $author;
        }
    }

    function getAuthors() {
        return $this->authors;
    }

    function toString() {
        $authorsString = array_map(function ($author) {
            return $author->toString();
        }, $this->authors);

        $authorsDetails = implode("; ", $authorsString);
        return "Book: [Name: {$this->bname}, Price: {$this->price}, Quantity: {$this->qty}, Authors: [{$authorsDetails}]]";
    }
}


$author1 = new Author1("Ahmed", "ahmed@gmail.com", "M");
$author2 = new Author1("Sara", "sara@gmail.com", "F");

$book = new Book1("Love Story", 900, 4, [$author1, $author2]);

echo $book->toString();

echo "<br>";

echo "________________________________________________________________________________<br><br>";





abstract class person {
   protected $name;
   protected $address;


   function __construct($name="userName",$address="userAddress"){ 
    $this->name=$name;
    $this->address=$address;
   }

   function setName($name){
    $this->name=$name;
   } 

   function getName(){
    return $this->name;
   }

   function setAddress($address){
    $this->address=$address;
   } 

   function getAddress(){
    return $this->address;
   }

   abstract public function toString():string;
}
class student extends person{
private $program;
private $year;
private $fee;

function __construct($name="username",$address="useraddress",$program="userprogram",$year="useryear",$fee="userfee"){
    parent::__construct($name,$address);
    $this->program=$program;
    $this->year=$year;
    $this->fee=$fee;
}
function setProgram($program){
    $this->program=$program;
}
function getProgram(){
    return $this->program;
}
function setYear($year){
    $this->year=$year;
}
function getYear(){
    return $this->year;
}
function setFee($fee){
    $this->fee=$fee;
}
function getFee(){
    return $this->fee;
}
function toString():string{
return "name:$this->name, address:$this->address, program:$this->program, year:$this->year, fee:$this->fee<br>";
}
}

class staff extends person{
private $school;
private $pay;
function __construct($name="username",$address="useraddress",$school="userschool",$pay="userpay"){
parent::__construct($name,$address);
$this->school=$school;
$this->pay=$pay;
}
function setSchool($school){
    $this->school=$school;
}
function getSchool(){
return $this->school;
}
function setPay($pay){
    $this->pay=$pay;
}
function getPay(){
    return $this->pay;
}
function toString():string{
    return "name:$this->name, address:$this->address, school:$this->school, pay:$this->pay<br>";
    }
}
$s=new student("malak","nasrcity","cs","2006",60000);
echo $s->toString();
$st=new staff("noha","giza","byan","700");
echo $st->toString();
echo "<br>";

echo "________________________________________________________________________________<br><br>";





interface Animal{
    function sound():void;
     function printName();
}
interface Mammel{
    function type():string;
}
class Dog implements Animal,Mammel{
    function sound():void{
        echo "woof";
        echo "<br>";
    }
    function printName(){
        echo "zelda";
        echo "<br>";
    }
function type():string{
    return "dog <br>";
    
}
}
class Cat implements Animal,Mammel{
    function sound():void{
        echo "meow";
        echo "<br>";
    }
    function printName(){
        echo "ninja";
        echo "<br>";
    } 
    function type():string{
        return "cat <br>";
        
    }
}
$dog=new Dog();
echo $dog->sound();
echo $dog->type(); 
echo $dog->printName();
echo "<br>";
$cat=new Cat();
echo $cat->sound();
echo $cat->type();
echo $cat->printName();

echo "<br>";
echo "________________________________________________________________________________<br><br>";






interface Shape {
    public function getColor(): string;
    public function setColor(string $color): void;
    public function isFilled(): bool;
    public function setFilled(bool $filled): void;
    public function getArea(): float;
    public function getPerimeter(): float;
    public function toString(): string;
}

class Circle implements Shape {
    private $color;
    private $filled;
    private $radius;

    public function __construct(float $radius = 1.0, string $color = "red", bool $filled = true) {
        $this->radius = $radius;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function toString(): string {
        return "Circle[Shape[color: $this->color, filled: " . ($this->filled ? "true" : "false") . "], radius: $this->radius]";
    }
}

class Rectangle implements Shape {
    private $color;
    private $filled;
    private $width;
    private $length;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "red", bool $filled = true) {
        $this->width = $width;
        $this->length = $length;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth(float $width): void {
        $this->width = $width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function setLength(float $length): void {
        $this->length = $length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function toString(): string {
        return "Rectangle[Shape[color: $this->color, filled: " . ($this->filled ? "true" : "false") . "], width: $this->width, length: $this->length]";
    }
}

class Square extends Rectangle {
    public function __construct(float $side = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float {
        return $this->getWidth();
    }

    public function setSide(float $side): void {
        $this->setWidth($side);
        $this->setLength($side);
    }

    public function toString(): string {
        return "Square[" . parent::toString() . "]";
    }
}

// Testing the classes
$c = new Circle(5.7, "green", false);
echo $c->toString() . "<br>";
echo "Area: " . $c->getArea() . ", Perimeter: " . $c->getPerimeter() . "<br>";

$re = new Rectangle(8.9, 3.7, "black", false);
echo $re->toString() . "<br>";
echo "Area: " . $re->getArea() . ", Perimeter: " . $re->getPerimeter() . "<br>";

$sq = new Square(6.8, "brown", true);
echo $sq->toString() . "<br>";
echo "Area: " . $sq->getArea() . ", Perimeter: " . $sq->getPerimeter() . "<br>";




echo "<br>";
echo "________________________________________________________________________________<br><br>";


abstract class Shape1 {
    protected $color;
    protected $filled;

    public function __construct($color = "red", $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor($color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled($filled): void {
        $this->filled = $filled;
    }

    public function toString(): string {
        return "Shape[color: $this->color, filled: " . ($this->filled ? "true" : "false") . "]";
    }
}

class Circle1 extends Shape1 {
    private $radius;

    public function __construct($radius = 1.0, $color = "red", $filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius($radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function toString(): string {
        return "Circle[" . parent::toString() . ", radius: $this->radius]";
    }
}

class Rectangle1 extends Shape1 {
    private $width;
    private $length;

    public function __construct($width = 1.0, $length = 1.0, $color = "red", $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth($width): void {
        $this->width = $width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function setLength($length): void {
        $this->length = $length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function toString(): string {
        return "Rectangle[" . parent::toString() . ", width: $this->width, length: $this->length]";
    }
}

class Square1 extends Rectangle1 {
    public function __construct($side = 1.0, $color = "red", $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float {
        return $this->getWidth();
    }

    public function setSide($side): void {
        $this->setWidth($side);
        $this->setLength($side);
    }

    public function toString(): string {
        return "Square[" . parent::toString() . "]";
    }
}


$c = new Circle1(5.7, "green", false);
echo $c->toString() . "<br>";
echo "Area: " . $c->getArea() . ", Perimeter: " . $c->getPerimeter() . "<br>";

$re = new Rectangle1(8.9, 3.7, "black", false);
echo $re->toString() . "<br>";
echo "Area: " . $re->getArea() . ", Perimeter: " . $re->getPerimeter() . "<br>";

$sq = new Square1(6.8, "brown", true);
echo $sq->toString() . "<br>";
echo "Area: " . $sq->getArea() . ", Perimeter: " . $sq->getPerimeter() . "<br>";




?>