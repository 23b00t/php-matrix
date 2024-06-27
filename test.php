<?php
$a = [[0, 1], [1, 0], [0, 1], [3, 2]];

// print_r(array_unique($a));
// $r = array_unique(array_map("serialize", $a));
// print_r($r);

$result = array_map("unserialize", array_unique(array_map("serialize", $a)));
print_r($result);

