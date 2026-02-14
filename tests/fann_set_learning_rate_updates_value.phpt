--TEST--
fann_set_learning_rate() updates learning rate
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);

var_dump(fann_set_learning_rate($ann, 0.75));
var_dump(abs(fann_get_learning_rate($ann) - 0.75) < 0.000001);

var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
