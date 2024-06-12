<?php
// Variable Scope / Lingkup Variable
$x = 10;

function tampilX() {
    global $x;
    echo $x;
}

tampilX();
?>