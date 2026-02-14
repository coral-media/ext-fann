--TEST--
fann_copy(), fann_save(), fann_create_from_file()
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$copy = fann_copy($ann);

$file = __DIR__ . '/fann_test.net';
@unlink($file);

var_dump(is_resource($copy));
var_dump(fann_save($copy, $file));

$fromFile = fann_create_from_file($file);
var_dump(is_resource($fromFile));

var_dump(fann_destroy($ann));
var_dump(fann_destroy($copy));
var_dump(fann_destroy($fromFile));

@unlink($file);
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
