--TEST--
fann_get_cascade_activation_steepnesses() returns array
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_shortcut(2, 2, 1);
$a = fann_get_cascade_activation_steepnesses($ann);
var_dump(is_array($a));
var_dump(count($a) > 0);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
