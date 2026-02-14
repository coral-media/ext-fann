--TEST--
fann_scale_train_data() returns true
--EXTENSIONS--
fann
--FILE--
<?php
$train = fann_create_train(4, 2, 1);
var_dump(fann_scale_train_data($train, -1.0, 1.0));
var_dump(fann_destroy_train($train));
?>
--EXPECT--
bool(true)
bool(true)
