--TEST--
fann_get_bias_array() returns bias counts
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$bias = fann_get_bias_array($ann);
var_dump(count($bias));
var_dump(is_int($bias[0]));
var_dump(fann_destroy($ann));
?>
--EXPECT--
int(3)
bool(true)
bool(true)
