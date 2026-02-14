--TEST--
fann_train() accepts one input/output pattern
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_train($ann, [0.0, 1.0], [1.0]));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
