<?php
$a = 5; // global scope
function myTest1() {
 // using x inside this function will generate an error
 echo "<p>Variable a inside function is: $a</p>";
}
myTest1();
echo "<p>Variable a outside function is: $a</p>";
echo "<br><hr>";

?>

<?php
function myTest2()
{
    $b = 5; // local scope
    echo "<p>Variable b inside function is: $b</p>";
}
myTest2();
// using b outside the function will generate an error
echo "<p>Variable b outside function is: $b</p>";
echo "<br><hr>";

?>


<?php
$c = 5;
$d = 10;
function myTest3()
{
    global $c, $d;
    $d = $c + $d;
}
myTest3(); // run function
echo $d; // output the new value for variable $d
echo "<br><hr>";

?>


<?php

function myTest()
{
    static $x = 0;
    echo $x;
    $x++;
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();

echo "<br><hr>";

?>
