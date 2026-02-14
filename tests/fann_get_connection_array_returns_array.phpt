--TEST--
fann_get_connection_array() returns connection rows
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$conns = fann_get_connection_array($ann);

var_dump(is_array($conns));
var_dump(isset($conns[0]['from_neuron']));
var_dump(isset($conns[0]['to_neuron']));
var_dump(isset($conns[0]['weight']));

var_dump(fann_destroy($ann));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
