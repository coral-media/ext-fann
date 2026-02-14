--TEST--
fann_version() returns extension version
--EXTENSIONS--
fann
--FILE--
<?php
var_dump(fann_version());
?>
--EXPECT--
string(5) "0.1.0"
