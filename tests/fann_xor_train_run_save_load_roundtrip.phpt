--TEST--
XOR train/run/save/load roundtrip
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
fann_set_training_algorithm($ann, FANN_TRAIN_INCREMENTAL);
fann_set_learning_rate($ann, 0.7);
fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);

$samples = [
    [[0.0, 0.0], [0.0]],
    [[0.0, 1.0], [1.0]],
    [[1.0, 0.0], [1.0]],
    [[1.0, 1.0], [0.0]],
];

for ($epoch = 0; $epoch < 200; $epoch++) {
    foreach ($samples as [$in, $out]) {
        fann_train($ann, $in, $out);
    }
}

$out = fann_run($ann, [0.0, 1.0]);
var_dump(is_array($out));
var_dump(count($out));
var_dump(is_float($out[0]));

$file = __DIR__ . '/tmp_xor_roundtrip.net';
@unlink($file);
var_dump(fann_save($ann, $file));

$loaded = fann_create_from_file($file);
$out2 = fann_run($loaded, [0.0, 1.0]);
var_dump(is_array($out2));
var_dump(count($out2));

var_dump(fann_destroy($loaded));
var_dump(fann_destroy($ann));
@unlink($file);
?>
--EXPECT--
bool(true)
int(1)
bool(true)
bool(true)
bool(true)
int(1)
bool(true)
bool(true)
