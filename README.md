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
Full API reference: `docs/api/index.md`.

### Network Creation, Persistence, and Lifecycle
- [`fann_create_standard`](docs/api/functions/fann_create_standard.md), [`fann_create_standard_array`](docs/api/functions/fann_create_standard_array.md)
- [`fann_create_sparse`](docs/api/functions/fann_create_sparse.md), [`fann_create_sparse_array`](docs/api/functions/fann_create_sparse_array.md)
- [`fann_create_shortcut`](docs/api/functions/fann_create_shortcut.md), [`fann_create_shortcut_array`](docs/api/functions/fann_create_shortcut_array.md)
- [`fann_create_from_file`](docs/api/functions/fann_create_from_file.md), [`fann_copy`](docs/api/functions/fann_copy.md), [`fann_destroy`](docs/api/functions/fann_destroy.md)
- [`fann_save`](docs/api/functions/fann_save.md), [`fann_save_to_fixed`](docs/api/functions/fann_save_to_fixed.md)
- [`fann_print_parameters`](docs/api/functions/fann_print_parameters.md), [`fann_print_connections`](docs/api/functions/fann_print_connections.md)

### Execution and Basic Training
- [`fann_run`](docs/api/functions/fann_run.md), [`fann_test`](docs/api/functions/fann_test.md)
- [`fann_train`](docs/api/functions/fann_train.md), [`fann_train_on_data`](docs/api/functions/fann_train_on_data.md), [`fann_train_on_file`](docs/api/functions/fann_train_on_file.md)
- [`fann_train_epoch`](docs/api/functions/fann_train_epoch.md), [`fann_test_data`](docs/api/functions/fann_test_data.md)
- [`fann_cascadetrain_on_data`](docs/api/functions/fann_cascadetrain_on_data.md), [`fann_cascadetrain_on_file`](docs/api/functions/fann_cascadetrain_on_file.md)

### Training Data I/O and Dataset Utilities
- [`fann_create_train`](docs/api/functions/fann_create_train.md), [`fann_read_train_from_file`](docs/api/functions/fann_read_train_from_file.md)
- [`fann_save_train`](docs/api/functions/fann_save_train.md), [`fann_save_train_to_fixed`](docs/api/functions/fann_save_train_to_fixed.md)
- [`fann_destroy_train`](docs/api/functions/fann_destroy_train.md)
- [`fann_shuffle_train_data`](docs/api/functions/fann_shuffle_train_data.md)
- [`fann_scale_input_train_data`](docs/api/functions/fann_scale_input_train_data.md), [`fann_scale_output_train_data`](docs/api/functions/fann_scale_output_train_data.md), [`fann_scale_train_data`](docs/api/functions/fann_scale_train_data.md)
- [`fann_merge_train_data`](docs/api/functions/fann_merge_train_data.md), [`fann_duplicate_train_data`](docs/api/functions/fann_duplicate_train_data.md), [`fann_subset_train_data`](docs/api/functions/fann_subset_train_data.md)
- [`fann_length_train_data`](docs/api/functions/fann_length_train_data.md), [`fann_num_input_train_data`](docs/api/functions/fann_num_input_train_data.md), [`fann_num_output_train_data`](docs/api/functions/fann_num_output_train_data.md)

### Training Metrics and Error Handling
- [`fann_get_MSE`](docs/api/functions/fann_get_MSE.md), [`fann_reset_MSE`](docs/api/functions/fann_reset_MSE.md), [`fann_get_bit_fail`](docs/api/functions/fann_get_bit_fail.md)
- [`fann_get_errno`](docs/api/functions/fann_get_errno.md), [`fann_reset_errno`](docs/api/functions/fann_reset_errno.md), [`fann_reset_errstr`](docs/api/functions/fann_reset_errstr.md)
- [`fann_get_errstr`](docs/api/functions/fann_get_errstr.md), [`fann_print_error`](docs/api/functions/fann_print_error.md), [`fann_set_error_log`](docs/api/functions/fann_set_error_log.md)

### Training Algorithm and Hyperparameters
- [`fann_set_training_algorithm`](docs/api/functions/fann_set_training_algorithm.md), [`fann_get_training_algorithm`](docs/api/functions/fann_get_training_algorithm.md)
- [`fann_set_learning_rate`](docs/api/functions/fann_set_learning_rate.md), [`fann_get_learning_rate`](docs/api/functions/fann_get_learning_rate.md)
- [`fann_set_learning_momentum`](docs/api/functions/fann_set_learning_momentum.md), [`fann_get_learning_momentum`](docs/api/functions/fann_get_learning_momentum.md)
- [`fann_set_train_error_function`](docs/api/functions/fann_set_train_error_function.md), [`fann_get_train_error_function`](docs/api/functions/fann_get_train_error_function.md)
- [`fann_set_train_stop_function`](docs/api/functions/fann_set_train_stop_function.md), [`fann_get_train_stop_function`](docs/api/functions/fann_get_train_stop_function.md)
- [`fann_set_bit_fail_limit`](docs/api/functions/fann_set_bit_fail_limit.md), [`fann_get_bit_fail_limit`](docs/api/functions/fann_get_bit_fail_limit.md)
- [`fann_set_quickprop_decay`](docs/api/functions/fann_set_quickprop_decay.md), [`fann_get_quickprop_decay`](docs/api/functions/fann_get_quickprop_decay.md)
- [`fann_set_quickprop_mu`](docs/api/functions/fann_set_quickprop_mu.md), [`fann_get_quickprop_mu`](docs/api/functions/fann_get_quickprop_mu.md)
- [`fann_set_rprop_increase_factor`](docs/api/functions/fann_set_rprop_increase_factor.md), [`fann_get_rprop_increase_factor`](docs/api/functions/fann_get_rprop_increase_factor.md)
- [`fann_set_rprop_decrease_factor`](docs/api/functions/fann_set_rprop_decrease_factor.md), [`fann_get_rprop_decrease_factor`](docs/api/functions/fann_get_rprop_decrease_factor.md)
- [`fann_set_rprop_delta_min`](docs/api/functions/fann_set_rprop_delta_min.md), [`fann_get_rprop_delta_min`](docs/api/functions/fann_get_rprop_delta_min.md)
- [`fann_set_rprop_delta_max`](docs/api/functions/fann_set_rprop_delta_max.md), [`fann_get_rprop_delta_max`](docs/api/functions/fann_get_rprop_delta_max.md)
- [`fann_set_rprop_delta_zero`](docs/api/functions/fann_set_rprop_delta_zero.md), [`fann_get_rprop_delta_zero`](docs/api/functions/fann_get_rprop_delta_zero.md)
- [`fann_set_sarprop_weight_decay_shift`](docs/api/functions/fann_set_sarprop_weight_decay_shift.md), [`fann_get_sarprop_weight_decay_shift`](docs/api/functions/fann_get_sarprop_weight_decay_shift.md)
- [`fann_set_sarprop_step_error_threshold_factor`](docs/api/functions/fann_set_sarprop_step_error_threshold_factor.md), [`fann_get_sarprop_step_error_threshold_factor`](docs/api/functions/fann_get_sarprop_step_error_threshold_factor.md)
- [`fann_set_sarprop_step_error_shift`](docs/api/functions/fann_set_sarprop_step_error_shift.md), [`fann_get_sarprop_step_error_shift`](docs/api/functions/fann_get_sarprop_step_error_shift.md)
- [`fann_set_sarprop_temperature`](docs/api/functions/fann_set_sarprop_temperature.md), [`fann_get_sarprop_temperature`](docs/api/functions/fann_get_sarprop_temperature.md)

### Activation Functions and Steepness
- [`fann_set_activation_function_hidden`](docs/api/functions/fann_set_activation_function_hidden.md), [`fann_set_activation_function_output`](docs/api/functions/fann_set_activation_function_output.md)
- [`fann_set_activation_function`](docs/api/functions/fann_set_activation_function.md), [`fann_set_activation_function_layer`](docs/api/functions/fann_set_activation_function_layer.md)
- [`fann_get_activation_function`](docs/api/functions/fann_get_activation_function.md)
- [`fann_set_activation_steepness`](docs/api/functions/fann_set_activation_steepness.md), [`fann_set_activation_steepness_layer`](docs/api/functions/fann_set_activation_steepness_layer.md)
- [`fann_set_activation_steepness_hidden`](docs/api/functions/fann_set_activation_steepness_hidden.md), [`fann_set_activation_steepness_output`](docs/api/functions/fann_set_activation_steepness_output.md)
- [`fann_get_activation_steepness`](docs/api/functions/fann_get_activation_steepness.md)

### Network Introspection, Topology, and Weights
- [`fann_get_num_input`](docs/api/functions/fann_get_num_input.md), [`fann_get_num_output`](docs/api/functions/fann_get_num_output.md), [`fann_get_num_layers`](docs/api/functions/fann_get_num_layers.md)
- [`fann_get_total_neurons`](docs/api/functions/fann_get_total_neurons.md), [`fann_get_total_connections`](docs/api/functions/fann_get_total_connections.md)
- [`fann_get_network_type`](docs/api/functions/fann_get_network_type.md), [`fann_get_connection_rate`](docs/api/functions/fann_get_connection_rate.md)
- [`fann_get_layer_array`](docs/api/functions/fann_get_layer_array.md), [`fann_get_bias_array`](docs/api/functions/fann_get_bias_array.md), [`fann_get_connection_array`](docs/api/functions/fann_get_connection_array.md)
- [`fann_set_weight_array`](docs/api/functions/fann_set_weight_array.md), [`fann_set_weight`](docs/api/functions/fann_set_weight.md)
- [`fann_randomize_weights`](docs/api/functions/fann_randomize_weights.md), [`fann_init_weights`](docs/api/functions/fann_init_weights.md)

### Input/Output Scaling (Runtime + Parameter Setup)
- [`fann_set_input_scaling_params`](docs/api/functions/fann_set_input_scaling_params.md), [`fann_set_output_scaling_params`](docs/api/functions/fann_set_output_scaling_params.md), [`fann_set_scaling_params`](docs/api/functions/fann_set_scaling_params.md)
- [`fann_clear_scaling_params`](docs/api/functions/fann_clear_scaling_params.md)
- [`fann_scale_train`](docs/api/functions/fann_scale_train.md), [`fann_descale_train`](docs/api/functions/fann_descale_train.md)
- [`fann_scale_input`](docs/api/functions/fann_scale_input.md), [`fann_scale_output`](docs/api/functions/fann_scale_output.md), [`fann_descale_input`](docs/api/functions/fann_descale_input.md), [`fann_descale_output`](docs/api/functions/fann_descale_output.md)

### Cascade Training Controls
- [`fann_get_cascade_output_change_fraction`](docs/api/functions/fann_get_cascade_output_change_fraction.md), [`fann_set_cascade_output_change_fraction`](docs/api/functions/fann_set_cascade_output_change_fraction.md)
- [`fann_get_cascade_output_stagnation_epochs`](docs/api/functions/fann_get_cascade_output_stagnation_epochs.md), [`fann_set_cascade_output_stagnation_epochs`](docs/api/functions/fann_set_cascade_output_stagnation_epochs.md)
- [`fann_get_cascade_candidate_change_fraction`](docs/api/functions/fann_get_cascade_candidate_change_fraction.md), [`fann_set_cascade_candidate_change_fraction`](docs/api/functions/fann_set_cascade_candidate_change_fraction.md)
- [`fann_get_cascade_candidate_stagnation_epochs`](docs/api/functions/fann_get_cascade_candidate_stagnation_epochs.md), [`fann_set_cascade_candidate_stagnation_epochs`](docs/api/functions/fann_set_cascade_candidate_stagnation_epochs.md)
- [`fann_get_cascade_weight_multiplier`](docs/api/functions/fann_get_cascade_weight_multiplier.md), [`fann_set_cascade_weight_multiplier`](docs/api/functions/fann_set_cascade_weight_multiplier.md)
- [`fann_get_cascade_candidate_limit`](docs/api/functions/fann_get_cascade_candidate_limit.md), [`fann_set_cascade_candidate_limit`](docs/api/functions/fann_set_cascade_candidate_limit.md)
- [`fann_get_cascade_max_out_epochs`](docs/api/functions/fann_get_cascade_max_out_epochs.md), [`fann_set_cascade_max_out_epochs`](docs/api/functions/fann_set_cascade_max_out_epochs.md)
- [`fann_get_cascade_min_out_epochs`](docs/api/functions/fann_get_cascade_min_out_epochs.md), [`fann_set_cascade_min_out_epochs`](docs/api/functions/fann_set_cascade_min_out_epochs.md)
- [`fann_get_cascade_max_cand_epochs`](docs/api/functions/fann_get_cascade_max_cand_epochs.md), [`fann_set_cascade_max_cand_epochs`](docs/api/functions/fann_set_cascade_max_cand_epochs.md)
- [`fann_get_cascade_min_cand_epochs`](docs/api/functions/fann_get_cascade_min_cand_epochs.md), [`fann_set_cascade_min_cand_epochs`](docs/api/functions/fann_set_cascade_min_cand_epochs.md)
- [`fann_get_cascade_num_candidates`](docs/api/functions/fann_get_cascade_num_candidates.md)
- [`fann_get_cascade_activation_functions_count`](docs/api/functions/fann_get_cascade_activation_functions_count.md), [`fann_get_cascade_activation_functions`](docs/api/functions/fann_get_cascade_activation_functions.md), [`fann_set_cascade_activation_functions`](docs/api/functions/fann_set_cascade_activation_functions.md)
- [`fann_get_cascade_activation_steepnesses_count`](docs/api/functions/fann_get_cascade_activation_steepnesses_count.md), [`fann_get_cascade_activation_steepnesses`](docs/api/functions/fann_get_cascade_activation_steepnesses.md), [`fann_set_cascade_activation_steepnesses`](docs/api/functions/fann_set_cascade_activation_steepnesses.md)
- [`fann_get_cascade_num_candidate_groups`](docs/api/functions/fann_get_cascade_num_candidate_groups.md), [`fann_set_cascade_num_candidate_groups`](docs/api/functions/fann_set_cascade_num_candidate_groups.md)

### Constants
- Full exposure of currently registered `FANN_*` constants (training algorithms, activation functions, stop/error functions, net types, and error codes).

## Vendored Dependency

- FANN source is vendored under `lib/libfann`
- License file: `lib/libfann/COPYING.txt`
