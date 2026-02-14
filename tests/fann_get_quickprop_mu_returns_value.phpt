--TEST--
fann_get_quickprop_mu() returns value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(is_float(fann_get_quickprop_mu($ann)));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
