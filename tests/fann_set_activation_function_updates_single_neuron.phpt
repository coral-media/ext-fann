--TEST--
fann_set_activation_function() updates a single neuron
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_activation_function($ann, FANN_LINEAR, 1, 0));
var_dump(fann_get_activation_function($ann, 1, 0) === FANN_LINEAR);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
