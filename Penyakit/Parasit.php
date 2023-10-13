<?php

class Parasit{
var $protozoa;

function create () {
return "Parasit " . $this->protozoa . " Itu merugikan" ;
}

function __construct($x) {
$this->protozoa = $x;
}
}
?>