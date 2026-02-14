--TEST--
fann_set_rprop_delta_max() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_rprop_delta_max($ann, 25.0));
var_dump(abs(fann_get_rprop_delta_max($ann) - 25.0) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
