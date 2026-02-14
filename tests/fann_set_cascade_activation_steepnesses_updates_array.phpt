--TEST--
fann_set_cascade_activation_steepnesses() updates array
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_shortcut(2, 2, 1);
var_dump(fann_set_cascade_activation_steepnesses($ann, [0.2, 0.8]));
$a = fann_get_cascade_activation_steepnesses($ann);
var_dump(abs($a[0] - 0.2) < 0.000001);
var_dump(abs($a[1] - 0.8) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
