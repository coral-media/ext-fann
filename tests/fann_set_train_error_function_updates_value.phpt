--TEST--
fann_set_train_error_function() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_set_train_error_function($ann, FANN_ERRORFUNC_LINEAR));
var_dump(fann_get_train_error_function($ann) === FANN_ERRORFUNC_LINEAR);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
