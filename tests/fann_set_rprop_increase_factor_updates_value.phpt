--TEST--
fann_set_rprop_increase_factor() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_rprop_increase_factor($ann, 1.3));
var_dump(abs(fann_get_rprop_increase_factor($ann) - 1.3) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
