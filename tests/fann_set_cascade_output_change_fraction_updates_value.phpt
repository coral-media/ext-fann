--TEST--
fann_set_cascade_output_change_fraction() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_shortcut(2, 2, 1);
var_dump(fann_set_cascade_output_change_fraction($ann, 0.02));
var_dump(abs(fann_get_cascade_output_change_fraction($ann)-0.02)<0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
