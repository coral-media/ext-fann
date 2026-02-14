--TEST--
fann_print_error() executes
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
ob_start();
fann_print_error($ann);
ob_end_clean();
var_dump(true);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
