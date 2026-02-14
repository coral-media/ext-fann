--TEST--
fann_set_activation_function_output() updates output layer neurons
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);

var_dump(fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC));
var_dump(fann_get_activation_function($ann, 2, 0) === FANN_SIGMOID_SYMMETRIC);

var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
