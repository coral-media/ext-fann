--TEST--
fann_set_error_log() returns true
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$file = __DIR__ . '/tmp_fann_error.log';
@unlink($file);

var_dump(fann_set_error_log($ann, $file));
var_dump(file_exists($file));
var_dump(fann_set_error_log($ann, null));

var_dump(fann_destroy($ann));
@unlink($file);
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
