--TEST--
fann_set_sarprop_step_error_threshold_factor() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_sarprop_step_error_threshold_factor($ann, 0.2));
var_dump(abs(fann_get_sarprop_step_error_threshold_factor($ann) - 0.2) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
