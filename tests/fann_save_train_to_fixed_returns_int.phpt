--TEST--
fann_save_train_to_fixed() returns int
--EXTENSIONS--
fann
--FILE--
<?php
$train = fann_create_train(4, 2, 1);
$file = __DIR__ . '/tmp_fann_train_fixed.data';
@unlink($file);

var_dump(is_int(fann_save_train_to_fixed($train, $file, 8)));
var_dump(file_exists($file));

var_dump(fann_destroy_train($train));
@unlink($file);
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
