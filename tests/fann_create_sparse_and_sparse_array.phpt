--TEST--
fann_create_sparse(), fann_create_sparse_array()
--EXTENSIONS--
fann
--FILE--
<?php
$a = fann_create_sparse(0.5, 3, 2, 3, 1);
$b = fann_create_sparse_array(0.5, [2, 3, 1]);

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
