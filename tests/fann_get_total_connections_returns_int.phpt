--TEST--
fann_get_total_connections() returns int
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(is_int(fann_get_total_connections($ann)));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
