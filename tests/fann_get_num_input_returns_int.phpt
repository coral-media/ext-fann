--TEST--
fann_get_num_input() returns int
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_get_num_input($ann));
var_dump(fann_destroy($ann));
?>
--EXPECT--
int(2)
bool(true)
