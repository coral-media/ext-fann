--TEST--
fann_subset_train_data() returns resource
--EXTENSIONS--
fann
--FILE--
<?php
$t = fann_create_train(4, 2, 1);
$s = fann_subset_train_data($t, 0, 2);
var_dump(is_resource($s));
var_dump(fann_destroy_train($s));
var_dump(fann_destroy_train($t));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
