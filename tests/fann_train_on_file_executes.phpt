--TEST--
fann_train_on_file() executes training from file
--EXTENSIONS--
fann
--FILE--
<?php
$file = __DIR__ . '/tmp_train_on_file.data';
@unlink($file);

$seed = fann_create_train(4, 2, 1);
fann_save_train($seed, $file);
fann_destroy_train($seed);

$ann = fann_create_standard(3, 2, 3, 1);
var_dump(fann_train_on_file($ann, $file, 1, 0, 0.0));

var_dump(fann_destroy($ann));
@unlink($file);
?>
--EXPECT--
bool(true)
bool(true)
