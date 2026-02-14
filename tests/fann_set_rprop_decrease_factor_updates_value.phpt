--TEST--
fann_set_rprop_decrease_factor() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_rprop_decrease_factor($ann, 0.4));
var_dump(abs(fann_get_rprop_decrease_factor($ann) - 0.4) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
