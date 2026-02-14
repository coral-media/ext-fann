--TEST--
fann_set_cascade_max_cand_epochs() updates value
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_shortcut(2, 2, 1);
var_dump(fann_set_cascade_max_cand_epochs($ann, 20));
var_dump(fann_get_cascade_max_cand_epochs($ann)===20);
var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
