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
list($part1, $part2) = explode($operator, $left);
if ($part1 == "X") {
    $X = $right / $part2;
} else {
    $X = $right / $part1;
}
echo "Уравнение: $equation\n";
echo "Оператор: $operator\n";
echo "X = $X";

?>