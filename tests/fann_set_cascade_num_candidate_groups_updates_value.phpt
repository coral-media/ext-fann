--TEST--
fann_set_cascade_num_candidate_groups() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_shortcut(2, 2, 1);
var_dump(fann_set_cascade_num_candidate_groups($ann, 3));
var_dump(fann_get_cascade_num_candidate_groups($ann)===3);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
