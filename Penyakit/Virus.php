<?php

class Virus{
var $corona;

function create () {
return "Virus " . $this->corona . " Berhasil dibasmi" ;
}

function __construct($x) {
$this->corona = $x;
}
}
?>