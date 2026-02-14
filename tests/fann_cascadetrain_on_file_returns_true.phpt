--TEST--
fann_cascadetrain_on_file() returns true
--EXTENSIONS--
fann
--FILE--
<?php
$file = __DIR__ . '/tmp_cascade_train.data';
@unlink($file);
$train = fann_create_train(4, 2, 1);
fann_save_train($train, $file);
fann_destroy_train($train);
$ann = fann_create_shortcut(2, 2, 1);
var_dump(fann_cascadetrain_on_file($ann, $file, 1, 0, 0.0));
var_dump(fann_destroy($ann));
@unlink($file);
?>
--EXPECT--
bool(true)
bool(true)
