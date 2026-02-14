--TEST--
fann_scale_output() returns array
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$train = fann_create_train(4, 2, 1);
var_dump(fann_set_scaling_params($ann, $train, -1.0, 1.0, -1.0, 1.0));
$out = fann_scale_output($ann, [0.2]);
var_dump(is_array($out));
var_dump(count($out));
var_dump(fann_destroy_train($train));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
int(1)
bool(true)
bool(true)
