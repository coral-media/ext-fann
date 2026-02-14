--TEST--
fann_get_layer_array() returns layer sizes
--EXTENSIONS--
fann
--FILE--
<?php
$ann = fann_create_standard(3, 2, 3, 1);
$layers = fann_get_layer_array($ann);
var_dump($layers);
var_dump(fann_destroy($ann));
?>
--EXPECT--
array(3) {
  [0]=>
  int(2)
  [1]=>
  int(3)
  [2]=>
  int(1)
}
bool(true)
