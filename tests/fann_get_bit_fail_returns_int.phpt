--TEST--
fann_get_bit_fail() returns int
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$bitFail = fann_get_bit_fail($ann);

var_dump(is_int($bitFail));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
