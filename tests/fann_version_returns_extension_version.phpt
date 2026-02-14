--TEST--
fann_version() returns extension version
--EXTENSIONS--
fann
--FILE--
<?php
$version = fann_version();
var_dump(is_string($version));
var_dump(strlen($version) > 0);
?>
--EXPECT--
bool(true)
bool(true)
