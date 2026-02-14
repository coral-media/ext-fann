--TEST--
fann_create_standard_array()
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard_array([2, 3, 1]);
var_dump(is_resource($ann));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
