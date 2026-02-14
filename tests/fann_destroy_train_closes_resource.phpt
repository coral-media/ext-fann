--TEST--
fann_destroy_train() closes training resource
--EXTENSIONS--
fann
--FILE--
<?php
$train = fann_create_train(2, 2, 1);
var_dump(fann_destroy_train($train));
?>
--EXPECT--
bool(true)
