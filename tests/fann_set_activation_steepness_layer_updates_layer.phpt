--TEST--
fann_set_activation_steepness_layer() updates layer
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_activation_steepness_layer($ann, 0.8, 1));
var_dump(abs(fann_get_activation_steepness($ann, 1, 0) - 0.8) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
