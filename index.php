<?php 

require_once('animal.php');
require_once('forg.php');
require_once('ape.php');

$sheep = new Animal("shaun");

$sheep->set_name('Shaun');

print $sheep->get_name();
echo"</br>";
print $sheep->get_legs();
echo"</br>";
print $sheep->get_cold();

echo"</br>";
echo"</br>";

$kodok = new Ape("kera sakti");
print $kodok->get_name();
echo"</br>";
print $kodok->yell() ;
echo"</br>";
print $kodok->get_legs() ;

echo"</br>";
echo"</br>";

$kodok = new Frog("buduk");
print $kodok->get_name();
echo"</br>";
print $kodok->jump() ;
echo"</br>";
print $kodok->get_legs() ;
