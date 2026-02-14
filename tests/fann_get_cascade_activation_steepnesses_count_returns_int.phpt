--TEST--
fann_get_cascade_activation_steepnesses_count() returns int
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_shortcut(2, 2, 1);
var_dump(is_int(fann_get_cascade_activation_steepnesses_count($ann)));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
