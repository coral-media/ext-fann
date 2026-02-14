--TEST--
fann_duplicate_train_data() returns resource
--EXTENSIONS--
fann
--FILE--
<?php
$t = fann_create_train(3, 2, 1);
$d = fann_duplicate_train_data($t);
var_dump(is_resource($d));
var_dump(fann_destroy_train($d));
var_dump(fann_destroy_train($t));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
