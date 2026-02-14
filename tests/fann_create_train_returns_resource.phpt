--TEST--
fann_create_train() returns training data resource
--EXTENSIONS--
fann
--FILE--
<?php
$train = fann_create_train(4, 2, 1);
var_dump(is_resource($train));
var_dump(fann_destroy_train($train));
?>
--EXPECT--
bool(true)
bool(true)
