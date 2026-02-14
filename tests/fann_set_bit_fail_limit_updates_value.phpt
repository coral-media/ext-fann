--TEST--
fann_set_bit_fail_limit() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_bit_fail_limit($ann, 0.42));
var_dump(abs(fann_get_bit_fail_limit($ann) - 0.42) < 0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
