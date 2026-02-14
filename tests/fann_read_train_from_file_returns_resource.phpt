--TEST--
fann_read_train_from_file() returns training data resource
--EXTENSIONS--
fann
--FILE--
<?php
$file = __DIR__ . '/tmp_train_read.data';
@unlink($file);

$train = fann_create_train(4, 2, 1);
fann_save_train($train, $file);
fann_destroy_train($train);

$loaded = fann_read_train_from_file($file);
var_dump(is_resource($loaded));
var_dump(fann_destroy_train($loaded));

@unlink($file);
?>
--EXPECT--
bool(true)
bool(true)
