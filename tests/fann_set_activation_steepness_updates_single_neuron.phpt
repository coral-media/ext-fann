--TEST--
fann_set_activation_steepness() updates single neuron
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_activation_steepness($ann, 0.9, 1, 0));
var_dump(abs(fann_get_activation_steepness($ann, 1, 0) - 0.9) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
