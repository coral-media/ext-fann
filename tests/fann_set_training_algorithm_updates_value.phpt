--TEST--
fann_set_training_algorithm() updates training algorithm
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);

var_dump(fann_set_training_algorithm($ann, FANN_TRAIN_BATCH));
var_dump(fann_get_training_algorithm($ann) === FANN_TRAIN_BATCH);

var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
