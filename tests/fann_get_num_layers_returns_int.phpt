--TEST--
fann_get_num_layers() returns layer count
--FILE--
<?php
$ann = fann_create_standard_array([2, 3, 1]);
var_dump(fann_get_num_layers($ann));
fann_destroy($ann);
?>
--EXPECT--
int(3)
