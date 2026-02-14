# coral-media/ext-fann

`coral-media/ext-fann` is a PHP extension that wraps the [Fast Artificial Neural Network (FANN)](https://github.com/libfann/fann) C library using vendored sources (`lib/libfann`).

## Status

The extension currently provides:

- Network lifecycle: create/copy/load/save/destroy
- Inference: `fann_run()`
- Training data lifecycle: create/read/save/destroy
- Core training: `fann_train()`, `fann_train_on_data()`, `fann_train_on_file()`, `fann_test()`
- Training metrics: `fann_get_MSE()`, `fann_reset_MSE()`, `fann_get_bit_fail()`
- Key setters/getters for training algorithm, learning rate, and activation functions
- Full exposure of currently registered `FANN_*` constants

## Requirements

- PHP `>= 8.1`
- A C toolchain (`phpize`, `make`, compiler)
- No system `libfann-dev` required (vendored build)

## Install (PIE)

From the extension root:

```bash
pie install --with-fann
```

## Build From Source (manual)

```bash
phpize
./configure --with-fann
make -j"$(nproc)"
make test
```

The extension module will be built as `fann`.

## Minimal Example

```php
<?php
$ann = fann_create_standard(3, 2, 3, 1);
fann_set_training_algorithm($ann, FANN_TRAIN_INCREMENTAL);
fann_set_learning_rate($ann, 0.7);
fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);

for ($epoch = 0; $epoch < 200; $epoch++) {
    fann_train($ann, [0.0, 0.0], [0.0]);
    fann_train($ann, [0.0, 1.0], [1.0]);
    fann_train($ann, [1.0, 0.0], [1.0]);
    fann_train($ann, [1.0, 1.0], [0.0]);
}

$out = fann_run($ann, [0.0, 1.0]);
var_dump($out);

fann_destroy($ann);
```

## Tests

Run all PHPT tests:

```bash
make test TESTS='tests/*.phpt'
```

## Vendored Dependency

- FANN source is vendored under `lib/libfann`
- License file: `lib/libfann/COPYING.txt`
