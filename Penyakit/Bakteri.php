<?php

class Bakteri{
var $laktobatilus;

function create () {
return "Bakteri " . $this->laktobatilus . " Berhasil penuhi " ;
}

function __construct($x) {
$this->laktobatilus = $x;
}
}
?>