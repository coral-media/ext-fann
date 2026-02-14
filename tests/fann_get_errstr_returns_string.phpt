--TEST--
fann_get_errstr() returns string
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(is_string(fann_get_errstr($ann)));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
