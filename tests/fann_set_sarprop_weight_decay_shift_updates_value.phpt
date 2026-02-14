--TEST--
fann_set_sarprop_weight_decay_shift() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_sarprop_weight_decay_shift($ann, -5.5));
var_dump(abs(fann_get_sarprop_weight_decay_shift($ann) - (-5.5)) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
