--TEST--
fann_get_network_type() returns int
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_get_network_type($ann) === FANN_NETTYPE_LAYER);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
