--TEST--
fann_get_MSE() returns float
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
fann_train($ann, [0.0, 1.0], [1.0]);

$mse = fann_get_MSE($ann);
var_dump(is_float($mse));

var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
