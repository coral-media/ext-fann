--TEST--
fann_print_connections() executes
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
var_dump(is_resource($ann));
fann_print_connections($ann);
var_dump(fann_destroy($ann));
?>
--EXPECTREGEX--
^bool\(true\)\R[\s\S]*bool\(true\)\R?[\s\S]*$
