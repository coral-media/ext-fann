--TEST--
fann_randomize_weights() returns true
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_randomize_weights($ann, -0.5, 0.5));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
