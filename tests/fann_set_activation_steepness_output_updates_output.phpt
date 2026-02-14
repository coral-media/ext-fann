--TEST--
fann_set_activation_steepness_output() updates output layer
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_activation_steepness_output($ann, 0.6));
var_dump(abs(fann_get_activation_steepness($ann, 2, 0) - 0.6) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
