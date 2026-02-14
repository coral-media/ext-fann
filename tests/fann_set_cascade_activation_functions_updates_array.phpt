--TEST--
fann_set_cascade_activation_functions() updates array
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_shortcut(2, 2, 1);
var_dump(fann_set_cascade_activation_functions($ann, [FANN_SIGMOID, FANN_LINEAR]));
$a = fann_get_cascade_activation_functions($ann);
var_dump($a[0] === FANN_SIGMOID);
var_dump($a[1] === FANN_LINEAR);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
