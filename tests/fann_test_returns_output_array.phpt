--TEST--
fann_test() returns output array
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$out = fann_test($ann, [0.0, 1.0], [1.0]);

var_dump(is_array($out));
var_dump(count($out));
var_dump(is_float($out[0]));

var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
int(1)
bool(true)
bool(true)
