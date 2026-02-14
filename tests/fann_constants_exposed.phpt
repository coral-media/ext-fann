--TEST--
fann constants are exposed
--EXTENSIONS--
fann
--FILE--
<?php
$constants = [
    'FANN_TRAIN_INCREMENTAL' => 0,
    'FANN_TRAIN_BATCH' => 1,
    'FANN_TRAIN_RPROP' => 2,
    'FANN_TRAIN_QUICKPROP' => 3,
    'FANN_TRAIN_SARPROP' => 4,
    'FANN_LINEAR' => 0,
    'FANN_THRESHOLD' => 1,
    'FANN_THRESHOLD_SYMMETRIC' => 2,
    'FANN_SIGMOID' => 3,
    'FANN_SIGMOID_STEPWISE' => 4,
    'FANN_SIGMOID_SYMMETRIC' => 5,
    'FANN_SIGMOID_SYMMETRIC_STEPWISE' => 6,
    'FANN_GAUSSIAN' => 7,
    'FANN_GAUSSIAN_SYMMETRIC' => 8,
    'FANN_GAUSSIAN_STEPWISE' => 9,
    'FANN_ELLIOT' => 10,
    'FANN_ELLIOT_SYMMETRIC' => 11,
    'FANN_LINEAR_PIECE' => 12,
    'FANN_LINEAR_PIECE_SYMMETRIC' => 13,
    'FANN_SIN_SYMMETRIC' => 14,
    'FANN_COS_SYMMETRIC' => 15,
    'FANN_SIN' => 16,
    'FANN_COS' => 17,
    'FANN_ERRORFUNC_LINEAR' => 0,
    'FANN_ERRORFUNC_TANH' => 1,
    'FANN_STOPFUNC_MSE' => 0,
    'FANN_STOPFUNC_BIT' => 1,
    'FANN_NETTYPE_LAYER' => 0,
    'FANN_NETTYPE_SHORTCUT' => 1,
    'FANN_E_NO_ERROR' => 0,
    'FANN_E_CANT_OPEN_CONFIG_R' => 1,
    'FANN_E_CANT_OPEN_CONFIG_W' => 2,
    'FANN_E_WRONG_CONFIG_VERSION' => 3,
    'FANN_E_CANT_READ_CONFIG' => 4,
    'FANN_E_CANT_READ_NEURON' => 5,
    'FANN_E_CANT_READ_CONNECTIONS' => 6,
    'FANN_E_WRONG_NUM_CONNECTIONS' => 7,
    'FANN_E_CANT_OPEN_TD_W' => 8,
    'FANN_E_CANT_OPEN_TD_R' => 9,
    'FANN_E_CANT_READ_TD' => 10,
    'FANN_E_CANT_ALLOCATE_MEM' => 11,
    'FANN_E_CANT_TRAIN_ACTIVATION' => 12,
    'FANN_E_CANT_USE_ACTIVATION' => 13,
    'FANN_E_TRAIN_DATA_MISMATCH' => 14,
    'FANN_E_CANT_USE_TRAIN_ALG' => 15,
    'FANN_E_TRAIN_DATA_SUBSET' => 16,
    'FANN_E_INDEX_OUT_OF_BOUND' => 17,
    'FANN_E_SCALE_NOT_PRESENT' => 18,
    'FANN_E_INPUT_NO_MATCH' => 19,
    'FANN_E_OUTPUT_NO_MATCH' => 20,
];

$allDefined = true;
foreach ($constants as $name => $value) {
    if (!defined($name)) {
        $allDefined = false;
        echo "Missing: $name\n";
        continue;
    }

    if (!is_int(constant($name)) || constant($name) !== $value) {
        $allDefined = false;
        echo "Invalid: $name=" . constant($name) . " expected $value\n";
    }
}

var_dump($allDefined);
var_dump(count($constants));
?>
--EXPECT--
bool(true)
int(50)
