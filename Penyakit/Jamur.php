<?php

class Jamur {
var $jamur;

function create() {
return "Jamur " . $this->jamur . " Berkembang biak" ;
}

function __constrtuct($x) {
$this->jamur = $x;
}
}

?>