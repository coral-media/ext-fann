--TEST--
fann_get_cascade_weight_multiplier() returns value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_shortcut(2, 2, 1);
var_dump(is_float(fann_get_cascade_weight_multiplier($ann)));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
