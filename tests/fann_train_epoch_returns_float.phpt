--TEST--
fann_train_epoch() returns float
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$train = fann_create_train(4, 2, 1);
var_dump(is_float(fann_train_epoch($ann, $train)));
var_dump(fann_destroy_train($train));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
