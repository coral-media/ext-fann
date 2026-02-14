--TEST--
fann_set_weight() updates one connection
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$conns = fann_get_connection_array($ann);
$c = $conns[0];

var_dump(fann_set_weight($ann, $c['from_neuron'], $c['to_neuron'], 0.123));

$conns2 = fann_get_connection_array($ann);
var_dump(abs($conns2[0]['weight'] - 0.123) < 0.0001);

var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
