--TEST--
fann_set_cascade_candidate_limit() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_shortcut(2, 2, 1);
var_dump(fann_set_cascade_candidate_limit($ann, 500.0));
var_dump(abs(fann_get_cascade_candidate_limit($ann)-500.0)<0.000001);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
