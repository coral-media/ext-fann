# coral-media/ext-fann

`coral-media/ext-fann` is a PHP extension that wraps the [Fast Artificial Neural Network (FANN)](https://github.com/libfann/fann) C library using vendored sources (`lib/libfann`).

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
make test
```

## API Coverage

Implemented functions are grouped below.

### Core / Version
- `fann_version`

### Network Creation, Persistence, and Lifecycle
- `fann_create_standard`, `fann_create_standard_array`
- `fann_create_sparse`, `fann_create_sparse_array`
- `fann_create_shortcut`, `fann_create_shortcut_array`
- `fann_create_from_file`, `fann_copy`, `fann_destroy`
- `fann_save`, `fann_save_to_fixed`
- `fann_print_parameters`, `fann_print_connections`

### Execution and Basic Training
- `fann_run`, `fann_test`
- `fann_train`, `fann_train_on_data`, `fann_train_on_file`
- `fann_train_epoch`, `fann_test_data`
- `fann_cascadetrain_on_data`, `fann_cascadetrain_on_file`

### Training Data I/O and Dataset Utilities
- `fann_create_train`, `fann_read_train_from_file`
- `fann_save_train`, `fann_save_train_to_fixed`
- `fann_destroy_train`
- `fann_shuffle_train_data`
- `fann_scale_input_train_data`, `fann_scale_output_train_data`, `fann_scale_train_data`
- `fann_merge_train_data`, `fann_duplicate_train_data`, `fann_subset_train_data`
- `fann_length_train_data`, `fann_num_input_train_data`, `fann_num_output_train_data`

### Training Metrics and Error Handling
- `fann_get_MSE`, `fann_reset_MSE`, `fann_get_bit_fail`
- `fann_get_errno`, `fann_reset_errno`, `fann_reset_errstr`
- `fann_get_errstr`, `fann_print_error`, `fann_set_error_log`

### Training Algorithm and Hyperparameters
- `fann_set_training_algorithm`, `fann_get_training_algorithm`
- `fann_set_learning_rate`, `fann_get_learning_rate`
- `fann_set_learning_momentum`, `fann_get_learning_momentum`
- `fann_set_train_error_function`, `fann_get_train_error_function`
- `fann_set_train_stop_function`, `fann_get_train_stop_function`
- `fann_set_bit_fail_limit`, `fann_get_bit_fail_limit`
- `fann_set_quickprop_decay`, `fann_get_quickprop_decay`
- `fann_set_quickprop_mu`, `fann_get_quickprop_mu`
- `fann_set_rprop_increase_factor`, `fann_get_rprop_increase_factor`
- `fann_set_rprop_decrease_factor`, `fann_get_rprop_decrease_factor`
- `fann_set_rprop_delta_min`, `fann_get_rprop_delta_min`
- `fann_set_rprop_delta_max`, `fann_get_rprop_delta_max`
- `fann_set_rprop_delta_zero`, `fann_get_rprop_delta_zero`
- `fann_set_sarprop_weight_decay_shift`, `fann_get_sarprop_weight_decay_shift`
- `fann_set_sarprop_step_error_threshold_factor`, `fann_get_sarprop_step_error_threshold_factor`
- `fann_set_sarprop_step_error_shift`, `fann_get_sarprop_step_error_shift`
- `fann_set_sarprop_temperature`, `fann_get_sarprop_temperature`

### Activation Functions and Steepness
- `fann_set_activation_function_hidden`, `fann_set_activation_function_output`
- `fann_set_activation_function`, `fann_set_activation_function_layer`
- `fann_get_activation_function`
- `fann_set_activation_steepness`, `fann_set_activation_steepness_layer`
- `fann_set_activation_steepness_hidden`, `fann_set_activation_steepness_output`
- `fann_get_activation_steepness`

### Network Introspection, Topology, and Weights
- `fann_get_num_input`, `fann_get_num_output`, `fann_get_num_layers`
- `fann_get_total_neurons`, `fann_get_total_connections`
- `fann_get_network_type`, `fann_get_connection_rate`
- `fann_get_layer_array`, `fann_get_bias_array`, `fann_get_connection_array`
- `fann_set_weight_array`, `fann_set_weight`
- `fann_randomize_weights`, `fann_init_weights`

### Input/Output Scaling (Runtime + Parameter Setup)
- `fann_set_input_scaling_params`, `fann_set_output_scaling_params`, `fann_set_scaling_params`
- `fann_clear_scaling_params`
- `fann_scale_train`, `fann_descale_train`
- `fann_scale_input`, `fann_scale_output`, `fann_descale_input`, `fann_descale_output`

### Cascade Training Controls
- `fann_get_cascade_output_change_fraction`, `fann_set_cascade_output_change_fraction`
- `fann_get_cascade_output_stagnation_epochs`, `fann_set_cascade_output_stagnation_epochs`
- `fann_get_cascade_candidate_change_fraction`, `fann_set_cascade_candidate_change_fraction`
- `fann_get_cascade_candidate_stagnation_epochs`, `fann_set_cascade_candidate_stagnation_epochs`
- `fann_get_cascade_weight_multiplier`, `fann_set_cascade_weight_multiplier`
- `fann_get_cascade_candidate_limit`, `fann_set_cascade_candidate_limit`
- `fann_get_cascade_max_out_epochs`, `fann_set_cascade_max_out_epochs`
- `fann_get_cascade_min_out_epochs`, `fann_set_cascade_min_out_epochs`
- `fann_get_cascade_max_cand_epochs`, `fann_set_cascade_max_cand_epochs`
- `fann_get_cascade_min_cand_epochs`, `fann_set_cascade_min_cand_epochs`
- `fann_get_cascade_num_candidates`
- `fann_get_cascade_activation_functions_count`, `fann_get_cascade_activation_functions`, `fann_set_cascade_activation_functions`
- `fann_get_cascade_activation_steepnesses_count`, `fann_get_cascade_activation_steepnesses`, `fann_set_cascade_activation_steepnesses`
- `fann_get_cascade_num_candidate_groups`, `fann_set_cascade_num_candidate_groups`

### Constants
- Full exposure of currently registered `FANN_*` constants (training algorithms, activation functions, stop/error functions, net types, and error codes).

## Vendored Dependency

- FANN source is vendored under `lib/libfann`
- License file: `lib/libfann/COPYING.txt`
