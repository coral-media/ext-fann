--TEST--
fann_test_data() returns float
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$train = fann_create_train(4, 2, 1);
var_dump(is_float(fann_test_data($ann, $train)));
var_dump(fann_destroy_train($train));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
