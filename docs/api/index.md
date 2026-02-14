
This is an automatically generated documentation for **FANN (Fast Artificial Neural Network) bindings for PHP**.

## Namespaces

### \

#### Functions

| Function                                                                                                          | Description                                                                  |
|-------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------|
| [`fann_version()`](./functions/fann_version.md)                                                                   | Returns the extension version string.                                        |
| [`fann_create_standard()`](./functions/fann_create_standard.md)                                                   | Creates a fully connected standard neural network from variadic layer sizes. |
| [`fann_create_standard_array()`](./functions/fann_create_standard_array.md)                                       | Creates a fully connected standard neural network from a layer-size array.   |
| [`fann_create_sparse()`](./functions/fann_create_sparse.md)                                                       | Creates a sparse neural network from variadic layer sizes.                   |
| [`fann_create_sparse_array()`](./functions/fann_create_sparse_array.md)                                           | Creates a sparse neural network from a layer-size array.                     |
| [`fann_create_shortcut()`](./functions/fann_create_shortcut.md)                                                   | Creates a shortcut neural network from variadic layer sizes.                 |
| [`fann_create_shortcut_array()`](./functions/fann_create_shortcut_array.md)                                       | Creates a shortcut neural network from a layer-size array.                   |
| [`fann_create_from_file()`](./functions/fann_create_from_file.md)                                                 | Loads a neural network from a saved configuration file.                      |
| [`fann_copy()`](./functions/fann_copy.md)                                                                         | Creates a copy of an existing neural network.                                |
| [`fann_destroy()`](./functions/fann_destroy.md)                                                                   | Destroys a neural network resource.                                          |
| [`fann_save()`](./functions/fann_save.md)                                                                         | Saves a neural network to a configuration file.                              |
| [`fann_save_to_fixed()`](./functions/fann_save_to_fixed.md)                                                       |                                                                              |
| [`fann_run()`](./functions/fann_run.md)                                                                           | Runs inference for one input vector.                                         |
| [`fann_print_parameters()`](./functions/fann_print_parameters.md)                                                 | Prints network parameters to standard output.                                |
| [`fann_create_train()`](./functions/fann_create_train.md)                                                         | Allocates an empty training-data structure.                                  |
| [`fann_read_train_from_file()`](./functions/fann_read_train_from_file.md)                                         | Loads training data from file.                                               |
| [`fann_save_train()`](./functions/fann_save_train.md)                                                             | Saves training data to file.                                                 |
| [`fann_save_train_to_fixed()`](./functions/fann_save_train_to_fixed.md)                                           |                                                                              |
| [`fann_destroy_train()`](./functions/fann_destroy_train.md)                                                       | Destroys a training-data resource.                                           |
| [`fann_train()`](./functions/fann_train.md)                                                                       | Trains the network with one input/output pattern.                            |
| [`fann_train_on_data()`](./functions/fann_train_on_data.md)                                                       | Trains the network using an in-memory training dataset.                      |
| [`fann_train_on_file()`](./functions/fann_train_on_file.md)                                                       | Trains the network using a training-data file.                               |
| [`fann_test()`](./functions/fann_test.md)                                                                         | Tests the network with one pattern and updates internal error state.         |
| [`fann_get_MSE()`](./functions/fann_get_MSE.md)                                                                   | Returns the current mean squared error.                                      |
| [`fann_reset_MSE()`](./functions/fann_reset_MSE.md)                                                               | Resets accumulated error metrics.                                            |
| [`fann_get_bit_fail()`](./functions/fann_get_bit_fail.md)                                                         | Returns the current bit-fail count.                                          |
| [`fann_set_training_algorithm()`](./functions/fann_set_training_algorithm.md)                                     | Sets the training algorithm.                                                 |
| [`fann_get_training_algorithm()`](./functions/fann_get_training_algorithm.md)                                     | Returns the current training algorithm.                                      |
| [`fann_set_learning_rate()`](./functions/fann_set_learning_rate.md)                                               | Sets the learning rate.                                                      |
| [`fann_get_learning_rate()`](./functions/fann_get_learning_rate.md)                                               | Returns the current learning rate.                                           |
| [`fann_set_activation_function_hidden()`](./functions/fann_set_activation_function_hidden.md)                     | Sets activation function for all hidden neurons.                             |
| [`fann_set_activation_function_output()`](./functions/fann_set_activation_function_output.md)                     | Sets activation function for all output neurons.                             |
| [`fann_set_activation_function()`](./functions/fann_set_activation_function.md)                                   |                                                                              |
| [`fann_set_activation_function_layer()`](./functions/fann_set_activation_function_layer.md)                       |                                                                              |
| [`fann_get_activation_function()`](./functions/fann_get_activation_function.md)                                   | Returns activation function for a specific neuron.                           |
| [`fann_get_activation_steepness()`](./functions/fann_get_activation_steepness.md)                                 |                                                                              |
| [`fann_set_activation_steepness()`](./functions/fann_set_activation_steepness.md)                                 |                                                                              |
| [`fann_set_activation_steepness_layer()`](./functions/fann_set_activation_steepness_layer.md)                     |                                                                              |
| [`fann_set_activation_steepness_hidden()`](./functions/fann_set_activation_steepness_hidden.md)                   |                                                                              |
| [`fann_set_activation_steepness_output()`](./functions/fann_set_activation_steepness_output.md)                   |                                                                              |
| [`fann_get_num_input()`](./functions/fann_get_num_input.md)                                                       |                                                                              |
| [`fann_get_num_output()`](./functions/fann_get_num_output.md)                                                     |                                                                              |
| [`fann_get_total_neurons()`](./functions/fann_get_total_neurons.md)                                               |                                                                              |
| [`fann_get_total_connections()`](./functions/fann_get_total_connections.md)                                       |                                                                              |
| [`fann_get_network_type()`](./functions/fann_get_network_type.md)                                                 |                                                                              |
| [`fann_get_connection_rate()`](./functions/fann_get_connection_rate.md)                                           |                                                                              |
| [`fann_get_num_layers()`](./functions/fann_get_num_layers.md)                                                     |                                                                              |
| [`fann_get_layer_array()`](./functions/fann_get_layer_array.md)                                                   |                                                                              |
| [`fann_get_bias_array()`](./functions/fann_get_bias_array.md)                                                     |                                                                              |
| [`fann_get_connection_array()`](./functions/fann_get_connection_array.md)                                         |                                                                              |
| [`fann_set_weight_array()`](./functions/fann_set_weight_array.md)                                                 |                                                                              |
| [`fann_set_weight()`](./functions/fann_set_weight.md)                                                             |                                                                              |
| [`fann_randomize_weights()`](./functions/fann_randomize_weights.md)                                               |                                                                              |
| [`fann_init_weights()`](./functions/fann_init_weights.md)                                                         |                                                                              |
| [`fann_print_connections()`](./functions/fann_print_connections.md)                                               |                                                                              |
| [`fann_get_learning_momentum()`](./functions/fann_get_learning_momentum.md)                                       |                                                                              |
| [`fann_set_learning_momentum()`](./functions/fann_set_learning_momentum.md)                                       |                                                                              |
| [`fann_get_train_error_function()`](./functions/fann_get_train_error_function.md)                                 |                                                                              |
| [`fann_set_train_error_function()`](./functions/fann_set_train_error_function.md)                                 |                                                                              |
| [`fann_get_train_stop_function()`](./functions/fann_get_train_stop_function.md)                                   |                                                                              |
| [`fann_set_train_stop_function()`](./functions/fann_set_train_stop_function.md)                                   |                                                                              |
| [`fann_get_bit_fail_limit()`](./functions/fann_get_bit_fail_limit.md)                                             |                                                                              |
| [`fann_set_bit_fail_limit()`](./functions/fann_set_bit_fail_limit.md)                                             |                                                                              |
| [`fann_get_quickprop_decay()`](./functions/fann_get_quickprop_decay.md)                                           |                                                                              |
| [`fann_set_quickprop_decay()`](./functions/fann_set_quickprop_decay.md)                                           |                                                                              |
| [`fann_get_quickprop_mu()`](./functions/fann_get_quickprop_mu.md)                                                 |                                                                              |
| [`fann_set_quickprop_mu()`](./functions/fann_set_quickprop_mu.md)                                                 |                                                                              |
| [`fann_get_rprop_increase_factor()`](./functions/fann_get_rprop_increase_factor.md)                               |                                                                              |
| [`fann_set_rprop_increase_factor()`](./functions/fann_set_rprop_increase_factor.md)                               |                                                                              |
| [`fann_get_rprop_decrease_factor()`](./functions/fann_get_rprop_decrease_factor.md)                               |                                                                              |
| [`fann_set_rprop_decrease_factor()`](./functions/fann_set_rprop_decrease_factor.md)                               |                                                                              |
| [`fann_get_rprop_delta_min()`](./functions/fann_get_rprop_delta_min.md)                                           |                                                                              |
| [`fann_set_rprop_delta_min()`](./functions/fann_set_rprop_delta_min.md)                                           |                                                                              |
| [`fann_get_rprop_delta_max()`](./functions/fann_get_rprop_delta_max.md)                                           |                                                                              |
| [`fann_set_rprop_delta_max()`](./functions/fann_set_rprop_delta_max.md)                                           |                                                                              |
| [`fann_get_rprop_delta_zero()`](./functions/fann_get_rprop_delta_zero.md)                                         |                                                                              |
| [`fann_set_rprop_delta_zero()`](./functions/fann_set_rprop_delta_zero.md)                                         |                                                                              |
| [`fann_get_sarprop_weight_decay_shift()`](./functions/fann_get_sarprop_weight_decay_shift.md)                     |                                                                              |
| [`fann_set_sarprop_weight_decay_shift()`](./functions/fann_set_sarprop_weight_decay_shift.md)                     |                                                                              |
| [`fann_get_sarprop_step_error_threshold_factor()`](./functions/fann_get_sarprop_step_error_threshold_factor.md)   |                                                                              |
| [`fann_set_sarprop_step_error_threshold_factor()`](./functions/fann_set_sarprop_step_error_threshold_factor.md)   |                                                                              |
| [`fann_get_sarprop_step_error_shift()`](./functions/fann_get_sarprop_step_error_shift.md)                         |                                                                              |
| [`fann_set_sarprop_step_error_shift()`](./functions/fann_set_sarprop_step_error_shift.md)                         |                                                                              |
| [`fann_get_sarprop_temperature()`](./functions/fann_get_sarprop_temperature.md)                                   |                                                                              |
| [`fann_set_sarprop_temperature()`](./functions/fann_set_sarprop_temperature.md)                                   |                                                                              |
| [`fann_shuffle_train_data()`](./functions/fann_shuffle_train_data.md)                                             |                                                                              |
| [`fann_scale_input_train_data()`](./functions/fann_scale_input_train_data.md)                                     |                                                                              |
| [`fann_scale_output_train_data()`](./functions/fann_scale_output_train_data.md)                                   |                                                                              |
| [`fann_scale_train_data()`](./functions/fann_scale_train_data.md)                                                 |                                                                              |
| [`fann_merge_train_data()`](./functions/fann_merge_train_data.md)                                                 |                                                                              |
| [`fann_duplicate_train_data()`](./functions/fann_duplicate_train_data.md)                                         |                                                                              |
| [`fann_subset_train_data()`](./functions/fann_subset_train_data.md)                                               |                                                                              |
| [`fann_length_train_data()`](./functions/fann_length_train_data.md)                                               |                                                                              |
| [`fann_num_input_train_data()`](./functions/fann_num_input_train_data.md)                                         |                                                                              |
| [`fann_num_output_train_data()`](./functions/fann_num_output_train_data.md)                                       |                                                                              |
| [`fann_train_epoch()`](./functions/fann_train_epoch.md)                                                           |                                                                              |
| [`fann_test_data()`](./functions/fann_test_data.md)                                                               |                                                                              |
| [`fann_scale_train()`](./functions/fann_scale_train.md)                                                           |                                                                              |
| [`fann_descale_train()`](./functions/fann_descale_train.md)                                                       |                                                                              |
| [`fann_set_input_scaling_params()`](./functions/fann_set_input_scaling_params.md)                                 |                                                                              |
| [`fann_set_output_scaling_params()`](./functions/fann_set_output_scaling_params.md)                               |                                                                              |
| [`fann_set_scaling_params()`](./functions/fann_set_scaling_params.md)                                             |                                                                              |
| [`fann_clear_scaling_params()`](./functions/fann_clear_scaling_params.md)                                         |                                                                              |
| [`fann_scale_input()`](./functions/fann_scale_input.md)                                                           |                                                                              |
| [`fann_scale_output()`](./functions/fann_scale_output.md)                                                         |                                                                              |
| [`fann_descale_input()`](./functions/fann_descale_input.md)                                                       |                                                                              |
| [`fann_descale_output()`](./functions/fann_descale_output.md)                                                     |                                                                              |
| [`fann_cascadetrain_on_data()`](./functions/fann_cascadetrain_on_data.md)                                         |                                                                              |
| [`fann_cascadetrain_on_file()`](./functions/fann_cascadetrain_on_file.md)                                         |                                                                              |
| [`fann_get_cascade_output_change_fraction()`](./functions/fann_get_cascade_output_change_fraction.md)             |                                                                              |
| [`fann_set_cascade_output_change_fraction()`](./functions/fann_set_cascade_output_change_fraction.md)             |                                                                              |
| [`fann_get_cascade_output_stagnation_epochs()`](./functions/fann_get_cascade_output_stagnation_epochs.md)         |                                                                              |
| [`fann_set_cascade_output_stagnation_epochs()`](./functions/fann_set_cascade_output_stagnation_epochs.md)         |                                                                              |
| [`fann_get_cascade_candidate_change_fraction()`](./functions/fann_get_cascade_candidate_change_fraction.md)       |                                                                              |
| [`fann_set_cascade_candidate_change_fraction()`](./functions/fann_set_cascade_candidate_change_fraction.md)       |                                                                              |
| [`fann_get_cascade_candidate_stagnation_epochs()`](./functions/fann_get_cascade_candidate_stagnation_epochs.md)   |                                                                              |
| [`fann_set_cascade_candidate_stagnation_epochs()`](./functions/fann_set_cascade_candidate_stagnation_epochs.md)   |                                                                              |
| [`fann_get_cascade_weight_multiplier()`](./functions/fann_get_cascade_weight_multiplier.md)                       |                                                                              |
| [`fann_set_cascade_weight_multiplier()`](./functions/fann_set_cascade_weight_multiplier.md)                       |                                                                              |
| [`fann_get_cascade_candidate_limit()`](./functions/fann_get_cascade_candidate_limit.md)                           |                                                                              |
| [`fann_set_cascade_candidate_limit()`](./functions/fann_set_cascade_candidate_limit.md)                           |                                                                              |
| [`fann_get_cascade_max_out_epochs()`](./functions/fann_get_cascade_max_out_epochs.md)                             |                                                                              |
| [`fann_set_cascade_max_out_epochs()`](./functions/fann_set_cascade_max_out_epochs.md)                             |                                                                              |
| [`fann_get_cascade_min_out_epochs()`](./functions/fann_get_cascade_min_out_epochs.md)                             |                                                                              |
| [`fann_set_cascade_min_out_epochs()`](./functions/fann_set_cascade_min_out_epochs.md)                             |                                                                              |
| [`fann_get_cascade_max_cand_epochs()`](./functions/fann_get_cascade_max_cand_epochs.md)                           |                                                                              |
| [`fann_set_cascade_max_cand_epochs()`](./functions/fann_set_cascade_max_cand_epochs.md)                           |                                                                              |
| [`fann_get_cascade_min_cand_epochs()`](./functions/fann_get_cascade_min_cand_epochs.md)                           |                                                                              |
| [`fann_set_cascade_min_cand_epochs()`](./functions/fann_set_cascade_min_cand_epochs.md)                           |                                                                              |
| [`fann_get_cascade_num_candidates()`](./functions/fann_get_cascade_num_candidates.md)                             |                                                                              |
| [`fann_get_cascade_activation_functions_count()`](./functions/fann_get_cascade_activation_functions_count.md)     |                                                                              |
| [`fann_get_cascade_activation_functions()`](./functions/fann_get_cascade_activation_functions.md)                 |                                                                              |
| [`fann_set_cascade_activation_functions()`](./functions/fann_set_cascade_activation_functions.md)                 |                                                                              |
| [`fann_get_cascade_activation_steepnesses_count()`](./functions/fann_get_cascade_activation_steepnesses_count.md) |                                                                              |
| [`fann_get_cascade_activation_steepnesses()`](./functions/fann_get_cascade_activation_steepnesses.md)             |                                                                              |
| [`fann_set_cascade_activation_steepnesses()`](./functions/fann_set_cascade_activation_steepnesses.md)             |                                                                              |
| [`fann_get_cascade_num_candidate_groups()`](./functions/fann_get_cascade_num_candidate_groups.md)                 |                                                                              |
| [`fann_set_cascade_num_candidate_groups()`](./functions/fann_set_cascade_num_candidate_groups.md)                 |                                                                              |
| [`fann_get_errno()`](./functions/fann_get_errno.md)                                                               |                                                                              |
| [`fann_reset_errno()`](./functions/fann_reset_errno.md)                                                           |                                                                              |
| [`fann_reset_errstr()`](./functions/fann_reset_errstr.md)                                                         |                                                                              |
| [`fann_get_errstr()`](./functions/fann_get_errstr.md)                                                             |                                                                              |
| [`fann_print_error()`](./functions/fann_print_error.md)                                                           |                                                                              |
| [`fann_set_error_log()`](./functions/fann_set_error_log.md)                                                       |                                                                              |

#### Constants

| Constant                                                                            | Value | Description                                                    |
|-------------------------------------------------------------------------------------|-------|----------------------------------------------------------------|
| [`FANN_TRAIN_INCREMENTAL`](./constants/FANN_TRAIN_INCREMENTAL.md)                   | 0     | Incremental backpropagation; weights update after each sample. |
| [`FANN_TRAIN_BATCH`](./constants/FANN_TRAIN_BATCH.md)                               | 1     | Batch backpropagation; weights update after full epoch.        |
| [`FANN_TRAIN_RPROP`](./constants/FANN_TRAIN_RPROP.md)                               | 2     | Resilient backpropagation (RPROP).                             |
| [`FANN_TRAIN_QUICKPROP`](./constants/FANN_TRAIN_QUICKPROP.md)                       | 3     | Quickprop training algorithm.                                  |
| [`FANN_TRAIN_SARPROP`](./constants/FANN_TRAIN_SARPROP.md)                           | 4     | Simulated annealing RPROP (SARPROP).                           |
| [`FANN_LINEAR`](./constants/FANN_LINEAR.md)                                         | 0     | Linear activation.                                             |
| [`FANN_THRESHOLD`](./constants/FANN_THRESHOLD.md)                                   | 1     | Threshold activation.                                          |
| [`FANN_THRESHOLD_SYMMETRIC`](./constants/FANN_THRESHOLD_SYMMETRIC.md)               | 2     | Symmetric threshold activation.                                |
| [`FANN_SIGMOID`](./constants/FANN_SIGMOID.md)                                       | 3     | Sigmoid activation.                                            |
| [`FANN_SIGMOID_STEPWISE`](./constants/FANN_SIGMOID_STEPWISE.md)                     | 4     | Stepwise sigmoid activation.                                   |
| [`FANN_SIGMOID_SYMMETRIC`](./constants/FANN_SIGMOID_SYMMETRIC.md)                   | 5     | Symmetric sigmoid activation.                                  |
| [`FANN_SIGMOID_SYMMETRIC_STEPWISE`](./constants/FANN_SIGMOID_SYMMETRIC_STEPWISE.md) | 6     | Stepwise symmetric sigmoid activation.                         |
| [`FANN_GAUSSIAN`](./constants/FANN_GAUSSIAN.md)                                     | 7     | Gaussian activation.                                           |
| [`FANN_GAUSSIAN_SYMMETRIC`](./constants/FANN_GAUSSIAN_SYMMETRIC.md)                 | 8     | Symmetric gaussian activation.                                 |
| [`FANN_GAUSSIAN_STEPWISE`](./constants/FANN_GAUSSIAN_STEPWISE.md)                   | 9     | Stepwise gaussian activation.                                  |
| [`FANN_ELLIOT`](./constants/FANN_ELLIOT.md)                                         | 10    | Elliot activation.                                             |
| [`FANN_ELLIOT_SYMMETRIC`](./constants/FANN_ELLIOT_SYMMETRIC.md)                     | 11    | Symmetric Elliot activation.                                   |
| [`FANN_LINEAR_PIECE`](./constants/FANN_LINEAR_PIECE.md)                             | 12    | Piecewise linear activation.                                   |
| [`FANN_LINEAR_PIECE_SYMMETRIC`](./constants/FANN_LINEAR_PIECE_SYMMETRIC.md)         | 13    | Symmetric piecewise linear activation.                         |
| [`FANN_SIN_SYMMETRIC`](./constants/FANN_SIN_SYMMETRIC.md)                           | 14    | Symmetric sine activation.                                     |
| [`FANN_COS_SYMMETRIC`](./constants/FANN_COS_SYMMETRIC.md)                           | 15    | Symmetric cosine activation.                                   |
| [`FANN_SIN`](./constants/FANN_SIN.md)                                               | 16    | Sine activation.                                               |
| [`FANN_COS`](./constants/FANN_COS.md)                                               | 17    | Cosine activation.                                             |
| [`FANN_ERRORFUNC_LINEAR`](./constants/FANN_ERRORFUNC_LINEAR.md)                     | 0     | Linear error function.                                         |
| [`FANN_ERRORFUNC_TANH`](./constants/FANN_ERRORFUNC_TANH.md)                         | 1     | Hyperbolic tangent error function.                             |
| [`FANN_STOPFUNC_MSE`](./constants/FANN_STOPFUNC_MSE.md)                             | 0     | Stop by MSE threshold.                                         |
| [`FANN_STOPFUNC_BIT`](./constants/FANN_STOPFUNC_BIT.md)                             | 1     | Stop by bit-fail threshold.                                    |
| [`FANN_NETTYPE_LAYER`](./constants/FANN_NETTYPE_LAYER.md)                           | 0     | Layered network (connections to next layer only).              |
| [`FANN_NETTYPE_SHORTCUT`](./constants/FANN_NETTYPE_SHORTCUT.md)                     | 1     | Shortcut network (connections to later layers).                |
| [`FANN_E_NO_ERROR`](./constants/FANN_E_NO_ERROR.md)                                 | 0     | No error.                                                      |
| [`FANN_E_CANT_OPEN_CONFIG_R`](./constants/FANN_E_CANT_OPEN_CONFIG_R.md)             | 1     | Cannot open configuration file for reading.                    |
| [`FANN_E_CANT_OPEN_CONFIG_W`](./constants/FANN_E_CANT_OPEN_CONFIG_W.md)             | 2     | Cannot open configuration file for writing.                    |
| [`FANN_E_WRONG_CONFIG_VERSION`](./constants/FANN_E_WRONG_CONFIG_VERSION.md)         | 3     | Configuration version mismatch.                                |
| [`FANN_E_CANT_READ_CONFIG`](./constants/FANN_E_CANT_READ_CONFIG.md)                 | 4     | Failed to read configuration file.                             |
| [`FANN_E_CANT_READ_NEURON`](./constants/FANN_E_CANT_READ_NEURON.md)                 | 5     | Failed to read neuron definition.                              |
| [`FANN_E_CANT_READ_CONNECTIONS`](./constants/FANN_E_CANT_READ_CONNECTIONS.md)       | 6     | Failed to read connections.                                    |
| [`FANN_E_WRONG_NUM_CONNECTIONS`](./constants/FANN_E_WRONG_NUM_CONNECTIONS.md)       | 7     | Unexpected number of connections.                              |
| [`FANN_E_CANT_OPEN_TD_W`](./constants/FANN_E_CANT_OPEN_TD_W.md)                     | 8     | Cannot open training data file for writing.                    |
| [`FANN_E_CANT_OPEN_TD_R`](./constants/FANN_E_CANT_OPEN_TD_R.md)                     | 9     | Cannot open training data file for reading.                    |
| [`FANN_E_CANT_READ_TD`](./constants/FANN_E_CANT_READ_TD.md)                         | 10    | Failed to read training data.                                  |
| [`FANN_E_CANT_ALLOCATE_MEM`](./constants/FANN_E_CANT_ALLOCATE_MEM.md)               | 11    | Memory allocation failed.                                      |
| [`FANN_E_CANT_TRAIN_ACTIVATION`](./constants/FANN_E_CANT_TRAIN_ACTIVATION.md)       | 12    | Invalid activation for training.                               |
| [`FANN_E_CANT_USE_ACTIVATION`](./constants/FANN_E_CANT_USE_ACTIVATION.md)           | 13    | Invalid activation for current operation.                      |
| [`FANN_E_TRAIN_DATA_MISMATCH`](./constants/FANN_E_TRAIN_DATA_MISMATCH.md)           | 14    | Incompatible training datasets.                                |
| [`FANN_E_CANT_USE_TRAIN_ALG`](./constants/FANN_E_CANT_USE_TRAIN_ALG.md)             | 15    | Invalid training algorithm for current operation.              |
| [`FANN_E_TRAIN_DATA_SUBSET`](./constants/FANN_E_TRAIN_DATA_SUBSET.md)               | 16    | Requested training-data subset is out of range.                |
| [`FANN_E_INDEX_OUT_OF_BOUND`](./constants/FANN_E_INDEX_OUT_OF_BOUND.md)             | 17    | Index is out of bounds.                                        |
| [`FANN_E_SCALE_NOT_PRESENT`](./constants/FANN_E_SCALE_NOT_PRESENT.md)               | 18    | Scaling parameters are not present.                            |
| [`FANN_E_INPUT_NO_MATCH`](./constants/FANN_E_INPUT_NO_MATCH.md)                     | 19    | Input count does not match network input neurons.              |
| [`FANN_E_OUTPUT_NO_MATCH`](./constants/FANN_E_OUTPUT_NO_MATCH.md)                   | 20    | Output count does not match network output neurons.            |
