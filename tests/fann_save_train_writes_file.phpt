--TEST--
fann_save_train() writes training file
--EXTENSIONS--
fann
--FILE--
<?php
$file = __DIR__ . '/tmp_train_save.data';
@unlink($file);

$train = fann_create_train(4, 2, 1);
var_dump(fann_save_train($train, $file));
var_dump(file_exists($file));

fann_destroy_train($train);
@unlink($file);
?>
--EXPECT--
bool(true)
bool(true)
