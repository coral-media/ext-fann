--TEST--
fann_set_activation_function_layer() updates layer neurons
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_activation_function_layer($ann, FANN_LINEAR, 1));
var_dump(fann_get_activation_function($ann, 1, 0) === FANN_LINEAR);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
