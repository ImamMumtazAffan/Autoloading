<?php

class Kudis {
var $kutu;

function create() {
return "Kudis " . $this->kutu . " Sampai menyebar" ;
}

function __construct($x) {
$this->kutu = $x;
}
}

?>