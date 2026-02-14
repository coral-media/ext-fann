--TEST--
fann_clear_scaling_params() returns bool
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(is_bool(fann_clear_scaling_params($ann)));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
