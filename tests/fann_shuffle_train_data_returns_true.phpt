--TEST--
fann_shuffle_train_data() returns true
--EXTENSIONS--
fann
--FILE--
<?php
$train = fann_create_train(4, 2, 1);
var_dump(fann_shuffle_train_data($train));
var_dump(fann_destroy_train($train));
?>
--EXPECT--
bool(true)
bool(true)
