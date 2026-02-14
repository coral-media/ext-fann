--TEST--
fann_cascadetrain_on_data() returns true
--EXTENSIONS--
fann
--FILE--
<?php
$train = fann_create_train(4, 2, 1);
$ann = fann_create_shortcut(2, 2, 1);
var_dump(fann_cascadetrain_on_data($ann, $train, 1, 0, 0.0));
var_dump(fann_destroy_train($train));
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
