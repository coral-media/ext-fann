--TEST--
fann_version() rejects arguments
--EXTENSIONS--
fann
--FILE--
<?php
try {
    fann_version('x');
} catch (\Throwable $e) {
    echo get_class($e), ': ', $e->getMessage(), PHP_EOL;
}
?>
--EXPECT--
ArgumentCountError: fann_version() expects exactly 0 arguments, 1 given
