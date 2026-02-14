--TEST--
fann_get_activation_function() returns int
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(is_int(fann_get_activation_function($ann, 1, 0)));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
