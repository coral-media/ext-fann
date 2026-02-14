--TEST--
fann_save_to_fixed() returns int
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$file = __DIR__ . '/tmp_fann_fixed.net';
@unlink($file);

var_dump(is_int(fann_save_to_fixed($ann, $file)));
var_dump(file_exists($file));

var_dump(fann_destroy($ann));
@unlink($file);
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
