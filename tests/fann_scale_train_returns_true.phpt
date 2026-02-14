--TEST--
fann_scale_train() returns true
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$train = fann_create_train(4, 2, 1);
var_dump(fann_set_scaling_params($ann, $train, -1.0, 1.0, -1.0, 1.0));
var_dump(fann_scale_train($ann, $train));
var_dump(fann_destroy_train($train));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
