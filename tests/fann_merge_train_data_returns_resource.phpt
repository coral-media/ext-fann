--TEST--
fann_merge_train_data() returns resource
--EXTENSIONS--
fann
--FILE--
<?php
$a = fann_create_train(2, 2, 1);
$b = fann_create_train(2, 2, 1);
$m = fann_merge_train_data($a, $b);
var_dump(is_resource($m));
var_dump(fann_destroy_train($m));
var_dump(fann_destroy_train($a));
var_dump(fann_destroy_train($b));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
