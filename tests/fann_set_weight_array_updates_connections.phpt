--TEST--
fann_set_weight_array() updates multiple connections
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$conns = fann_get_connection_array($ann);

$updates = [
  ['from_neuron' => $conns[0]['from_neuron'], 'to_neuron' => $conns[0]['to_neuron'], 'weight' => 0.11],
  ['from_neuron' => $conns[1]['from_neuron'], 'to_neuron' => $conns[1]['to_neuron'], 'weight' => -0.22],
];

var_dump(fann_set_weight_array($ann, $updates));
$conns2 = fann_get_connection_array($ann);
var_dump(abs($conns2[0]['weight'] - 0.11) < 0.0001);
var_dump(abs($conns2[1]['weight'] - (-0.22)) < 0.0001);

var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
