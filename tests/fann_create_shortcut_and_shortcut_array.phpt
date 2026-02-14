--TEST--
fann_create_shortcut(), fann_create_shortcut_array()
--EXTENSIONS--
fann
--FILE--
<?php
$a = fann_create_shortcut(3, 2, 3, 1);
$b = fann_create_shortcut_array([2, 3, 1]);

var_dump(is_resource($a));
var_dump(is_resource($b));

var_dump(fann_destroy($a));
var_dump(fann_destroy($b));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
