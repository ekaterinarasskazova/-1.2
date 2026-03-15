<?php
$equation = "4*X=36";
$equation = str_replace(" ", "", $equation);
list($left, $right) = explode("=", $equation);
if (strpos($left, "+") !== false) {
    $operator = "+";
} elseif (strpos($left, "-") !== false) {
    $operator = "-";
} elseif (strpos($left, "*") !== false) {
    $operator = "*";
} elseif (strpos($left, "/") !== false) {
    $operator = "/";
} 
