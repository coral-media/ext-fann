--TEST--
fann_set_quickprop_mu() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_quickprop_mu($ann, 1.85));
var_dump(abs(fann_get_quickprop_mu($ann) - 1.85) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
