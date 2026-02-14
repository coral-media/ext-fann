--TEST--
fann_num_input_train_data() returns int
--EXTENSIONS--
fann
--FILE--
<?php
$t = fann_create_train(4, 2, 1);
var_dump(fann_num_input_train_data($t));
var_dump(fann_destroy_train($t));
?>
--EXPECT--
int(2)
bool(true)
