--TEST--
fann_reset_MSE() returns true
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_reset_MSE($ann));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
