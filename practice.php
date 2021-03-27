<?php


$txt = 'Hello World';
echo $txt;
print $txt;

print 'My first php code';


function lotus() {
    static $x= 'Lotus is a plant';
    echo $x;
}
lotus();
lotus();


$y=616;
var_dump ($y);  #returnsinteger

echo strlen('Programming is fun'); #outputs string length
echo strrev('Reversing this string'); #reverses string
echo strpos('This is my text' , 'is'); #finds text in string - first char position is 0,not 1!
echo str_replace('world', 'Lily', 'Hello world!'); #replaces string 

$a=5;
var_dump (is_int($a)); #checks if type of variable is integer

define('colors', [  #use define() to create a constant/array constant
    'blue',
    'red',
    'yellow',
    'green',
]);

echo colors[3];


function myConditional() {
    $x=3;
    $y=5;
    if ($x===3 && $y!=4) {echo 'Success';}
    else {echo 'Ooops';}
}
myConditional();

$x=10;

function x() {
    $x=5;
    while ($x <= 5) {echo 'Cool';
    $x++;}

}
x();


# FUN FACTS
# php has automatic data type conversion - if you assign integer to a variable, it will become type ineteger. then, if you change it to string, the type will be string 
# constants are automatically global
?>

