--TEST--
fann_create_standard(), fann_run(), fann_destroy()
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(is_resource($ann));

$out = fann_run($ann, [0.5, -0.25]);
var_dump(is_array($out));
var_dump(count($out));
var_dump(is_float($out[0]));

var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
int(1)
bool(true)
bool(true)
