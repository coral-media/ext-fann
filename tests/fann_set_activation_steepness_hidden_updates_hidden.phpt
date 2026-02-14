--TEST--
fann_set_activation_steepness_hidden() updates hidden layers
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_activation_steepness_hidden($ann, 0.7));
var_dump(abs(fann_get_activation_steepness($ann, 1, 0) - 0.7) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
