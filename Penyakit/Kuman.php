<?php

class Kuman{
var $ebola;

function create () {
return "Kuman " . $this->ebola . " Berhasil basmi" ;
}

function __construct($x) {
$this->ebola = $x;
}
}
?>