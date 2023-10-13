<?php


spl_autoload_register(function ($class_penyakit) {
require_once 'Penyakit/' . $class_penyakit . ".php" ;
});


$a = new virus ("Corona");
$b = new kuman ("Ebola");
$c = new bakteri ("laktobasilus");
$x = new Jamur ("Jamur");
$y = new Kudis ("Kutu");
$z = new Parasit ("Protozoa");


echo $a->create() . "<br/>";
echo $b->create() . "<br/>";
echo $c->create() .  "<br/>";
echo $x->create() . "<br/>";
echo $y->create() . "<br/>";
echo $z->create() . "<br/>";