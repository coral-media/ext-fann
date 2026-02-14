--TEST--
fann_get_sarprop_weight_decay_shift() returns value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(is_float(fann_get_sarprop_weight_decay_shift($ann)));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
