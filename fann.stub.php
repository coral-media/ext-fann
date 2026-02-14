<?php

/**
 * @generate-class-entries
 */

/**
 * Returns the extension version string.
 */
function fann_version(): string {}

/**
 * Creates a fully connected standard neural network from variadic layer sizes.
 *
 * @param int $num_layers Total number of layers, including input and output layers.
 * @param int ...$layers Number of neurons for each layer.
 * @return resource|false Neural network resource on success, false on failure.
 */
function fann_create_standard(int $num_layers, int ...$layers): mixed {}

/**
 * Creates a fully connected standard neural network from a layer-size array.
 *
 * @param array $layers Number of neurons for each layer.
 * @return resource|false Neural network resource on success, false on failure.
 */
function fann_create_standard_array(array $layers): mixed {}

/**
 * Creates a sparse neural network from variadic layer sizes.
 *
 * @param float $connection_rate Sparse connection rate in range (0, 1].
 * @param int $num_layers Total number of layers, including input and output layers.
 * @param int ...$layers Number of neurons for each layer.
 * @return resource|false Neural network resource on success, false on failure.
 */
function fann_create_sparse(float $connection_rate, int $num_layers, int ...$layers): mixed {}

/**
 * Creates a sparse neural network from a layer-size array.
 *
 * @param float $connection_rate Sparse connection rate in range (0, 1].
 * @param array $layers Number of neurons for each layer.
 * @return resource|false Neural network resource on success, false on failure.
 */
function fann_create_sparse_array(float $connection_rate, array $layers): mixed {}

/**
 * Creates a shortcut neural network from variadic layer sizes.
 *
 * @param int $num_layers Total number of layers, including input and output layers.
 * @param int ...$layers Number of neurons for each layer.
 * @return resource|false Neural network resource on success, false on failure.
 */
function fann_create_shortcut(int $num_layers, int ...$layers): mixed {}

/**
 * Creates a shortcut neural network from a layer-size array.
 *
 * @param array $layers Number of neurons for each layer.
 * @return resource|false Neural network resource on success, false on failure.
 */
function fann_create_shortcut_array(array $layers): mixed {}

/**
 * Loads a neural network from a saved configuration file.
 *
 * @param string $configuration_file Path to a `.net` file.
 * @return resource|false Neural network resource on success, false on failure.
 */
function fann_create_from_file(string $configuration_file): mixed {}

/**
 * Creates a copy of an existing neural network.
 *
 * @param resource $ann Neural network resource.
 * @return resource|false Copied network resource on success, false on failure.
 */
function fann_copy(mixed $ann): mixed {}

/**
 * Destroys a neural network resource.
 *
 * @param resource $ann Neural network resource.
 */
function fann_destroy(mixed $ann): bool {}

/**
 * Saves a neural network to a configuration file.
 *
 * @param resource $ann Neural network resource.
 * @param string $configuration_file Destination file path.
 */
function fann_save(mixed $ann, string $configuration_file): bool {}

/**
 * Runs inference for one input vector.
 *
 * @param resource $ann Neural network resource.
 * @param array $input Input values; size must match network input count.
 * @return array|false Output vector on success, false on failure.
 */
function fann_run(mixed $ann, array $input): mixed {}

/**
 * Prints network parameters to standard output.
 *
 * @param resource $ann Neural network resource.
 */
function fann_print_parameters(mixed $ann): void {}

/**
 * Allocates an empty training-data structure.
 *
 * @param int $num_data Number of training rows.
 * @param int $num_input Number of input values per row.
 * @param int $num_output Number of output values per row.
 * @return resource|false Training data resource on success, false on failure.
 */
function fann_create_train(int $num_data, int $num_input, int $num_output): mixed {}

/**
 * Loads training data from file.
 *
 * @param string $filename Path to a FANN training-data file.
 * @return resource|false Training data resource on success, false on failure.
 */
function fann_read_train_from_file(string $filename): mixed {}

/**
 * Saves training data to file.
 *
 * @param resource $train_data Training data resource.
 * @param string $filename Destination file path.
 */
function fann_save_train(mixed $train_data, string $filename): bool {}

/**
 * Destroys a training-data resource.
 *
 * @param resource $train_data Training data resource.
 */
function fann_destroy_train(mixed $train_data): bool {}

/**
 * Trains the network with one input/output pattern.
 *
 * @param resource $ann Neural network resource.
 * @param array $input Input vector.
 * @param array $desired_output Expected output vector.
 */
function fann_train(mixed $ann, array $input, array $desired_output): bool {}

/**
 * Trains the network using an in-memory training dataset.
 *
 * @param resource $ann Neural network resource.
 * @param resource $train_data Training data resource.
 * @param int $max_epochs Maximum training epochs.
 * @param int $epochs_between_reports Reporting interval.
 * @param float $desired_error Target error threshold.
 */
function fann_train_on_data(
	mixed $ann,
	mixed $train_data,
	int $max_epochs,
	int $epochs_between_reports,
	float $desired_error
): bool {}

/**
 * Trains the network using a training-data file.
 *
 * @param resource $ann Neural network resource.
 * @param string $filename Training-data file path.
 * @param int $max_epochs Maximum training epochs.
 * @param int $epochs_between_reports Reporting interval.
 * @param float $desired_error Target error threshold.
 */
function fann_train_on_file(
	mixed $ann,
	string $filename,
	int $max_epochs,
	int $epochs_between_reports,
	float $desired_error
): bool {}

/**
 * Tests the network with one pattern and updates internal error state.
 *
 * @param resource $ann Neural network resource.
 * @param array $input Input vector.
 * @param array $desired_output Expected output vector.
 * @return array|false Output vector on success, false on failure.
 */
function fann_test(mixed $ann, array $input, array $desired_output): mixed {}

/**
 * Returns the current mean squared error.
 *
 * @param resource $ann Neural network resource.
 */
function fann_get_MSE(mixed $ann): float {}

/**
 * Resets accumulated error metrics.
 *
 * @param resource $ann Neural network resource.
 */
function fann_reset_MSE(mixed $ann): bool {}

/**
 * Returns the current bit-fail count.
 *
 * @param resource $ann Neural network resource.
 */
function fann_get_bit_fail(mixed $ann): int {}

/**
 * Sets the training algorithm.
 *
 * @param resource $ann Neural network resource.
 * @param int $training_algorithm One of `FANN_TRAIN_*`.
 */
function fann_set_training_algorithm(mixed $ann, int $training_algorithm): bool {}

/**
 * Returns the current training algorithm.
 *
 * @param resource $ann Neural network resource.
 */
function fann_get_training_algorithm(mixed $ann): int {}

/**
 * Sets the learning rate.
 *
 * @param resource $ann Neural network resource.
 * @param float $learning_rate Learning rate value.
 */
function fann_set_learning_rate(mixed $ann, float $learning_rate): bool {}

/**
 * Returns the current learning rate.
 *
 * @param resource $ann Neural network resource.
 */
function fann_get_learning_rate(mixed $ann): float {}

/**
 * Sets activation function for all hidden neurons.
 *
 * @param resource $ann Neural network resource.
 * @param int $activation_function One of `FANN_*` activation constants.
 */
function fann_set_activation_function_hidden(mixed $ann, int $activation_function): bool {}

/**
 * Sets activation function for all output neurons.
 *
 * @param resource $ann Neural network resource.
 * @param int $activation_function One of `FANN_*` activation constants.
 */
function fann_set_activation_function_output(mixed $ann, int $activation_function): bool {}

/**
 * Returns activation function for a specific neuron.
 *
 * @param resource $ann Neural network resource.
 * @param int $layer Layer index.
 * @param int $neuron Neuron index in layer.
 */
function fann_get_activation_function(mixed $ann, int $layer, int $neuron): int {}

/**
 * Incremental backpropagation; weights update after each sample.
 * @var int
 */
const FANN_TRAIN_INCREMENTAL = 0;
/**
 * Batch backpropagation; weights update after full epoch.
 * @var int
 */
const FANN_TRAIN_BATCH = 1;
/**
 * Resilient backpropagation (RPROP).
 * @var int
 */
const FANN_TRAIN_RPROP = 2;
/**
 * Quickprop training algorithm.
 * @var int
 */
const FANN_TRAIN_QUICKPROP = 3;
/**
 * Simulated annealing RPROP (SARPROP).
 * @var int
 */
const FANN_TRAIN_SARPROP = 4;

/**
 * Linear activation.
 * @var int
 */
const FANN_LINEAR = 0;
/**
 * Threshold activation.
 * @var int
 */
const FANN_THRESHOLD = 1;
/**
 * Symmetric threshold activation.
 * @var int
 */
const FANN_THRESHOLD_SYMMETRIC = 2;
/**
 * Sigmoid activation.
 * @var int
 */
const FANN_SIGMOID = 3;
/**
 * Stepwise sigmoid activation.
 * @var int
 */
const FANN_SIGMOID_STEPWISE = 4;
/**
 * Symmetric sigmoid activation.
 * @var int
 */
const FANN_SIGMOID_SYMMETRIC = 5;
/**
 * Stepwise symmetric sigmoid activation.
 * @var int
 */
const FANN_SIGMOID_SYMMETRIC_STEPWISE = 6;
/**
 * Gaussian activation.
 * @var int
 */
const FANN_GAUSSIAN = 7;
/**
 * Symmetric gaussian activation.
 * @var int
 */
const FANN_GAUSSIAN_SYMMETRIC = 8;
/**
 * Stepwise gaussian activation.
 * @var int
 */
const FANN_GAUSSIAN_STEPWISE = 9;
/**
 * Elliot activation.
 * @var int
 */
const FANN_ELLIOT = 10;
/**
 * Symmetric Elliot activation.
 * @var int
 */
const FANN_ELLIOT_SYMMETRIC = 11;
/**
 * Piecewise linear activation.
 * @var int
 */
const FANN_LINEAR_PIECE = 12;
/**
 * Symmetric piecewise linear activation.
 * @var int
 */
const FANN_LINEAR_PIECE_SYMMETRIC = 13;
/**
 * Symmetric sine activation.
 * @var int
 */
const FANN_SIN_SYMMETRIC = 14;
/**
 * Symmetric cosine activation.
 * @var int
 */
const FANN_COS_SYMMETRIC = 15;
/**
 * Sine activation.
 * @var int
 */
const FANN_SIN = 16;
/**
 * Cosine activation.
 * @var int
 */
const FANN_COS = 17;

/**
 * Linear error function.
 * @var int
 */
const FANN_ERRORFUNC_LINEAR = 0;
/**
 * Hyperbolic tangent error function.
 * @var int
 */
const FANN_ERRORFUNC_TANH = 1;

/**
 * Stop by MSE threshold.
 * @var int
 */
const FANN_STOPFUNC_MSE = 0;
/**
 * Stop by bit-fail threshold.
 * @var int
 */
const FANN_STOPFUNC_BIT = 1;

/**
 * Layered network (connections to next layer only).
 * @var int
 */
const FANN_NETTYPE_LAYER = 0;
/**
 * Shortcut network (connections to later layers).
 * @var int
 */
const FANN_NETTYPE_SHORTCUT = 1;

/**
 * No error.
 * @var int
 */
const FANN_E_NO_ERROR = 0;
/**
 * Cannot open configuration file for reading.
 * @var int
 */
const FANN_E_CANT_OPEN_CONFIG_R = 1;
/**
 * Cannot open configuration file for writing.
 * @var int
 */
const FANN_E_CANT_OPEN_CONFIG_W = 2;
/**
 * Configuration version mismatch.
 * @var int
 */
const FANN_E_WRONG_CONFIG_VERSION = 3;
/**
 * Failed to read configuration file.
 * @var int
 */
const FANN_E_CANT_READ_CONFIG = 4;
/**
 * Failed to read neuron definition.
 * @var int
 */
const FANN_E_CANT_READ_NEURON = 5;
/**
 * Failed to read connections.
 * @var int
 */
const FANN_E_CANT_READ_CONNECTIONS = 6;
/**
 * Unexpected number of connections.
 * @var int
 */
const FANN_E_WRONG_NUM_CONNECTIONS = 7;
/**
 * Cannot open training data file for writing.
 * @var int
 */
const FANN_E_CANT_OPEN_TD_W = 8;
/**
 * Cannot open training data file for reading.
 * @var int
 */
const FANN_E_CANT_OPEN_TD_R = 9;
/**
 * Failed to read training data.
 * @var int
 */
const FANN_E_CANT_READ_TD = 10;
/**
 * Memory allocation failed.
 * @var int
 */
const FANN_E_CANT_ALLOCATE_MEM = 11;
/**
 * Invalid activation for training.
 * @var int
 */
const FANN_E_CANT_TRAIN_ACTIVATION = 12;
/**
 * Invalid activation for current operation.
 * @var int
 */
const FANN_E_CANT_USE_ACTIVATION = 13;
/**
 * Incompatible training datasets.
 * @var int
 */
const FANN_E_TRAIN_DATA_MISMATCH = 14;
/**
 * Invalid training algorithm for current operation.
 * @var int
 */
const FANN_E_CANT_USE_TRAIN_ALG = 15;
/**
 * Requested training-data subset is out of range.
 * @var int
 */
const FANN_E_TRAIN_DATA_SUBSET = 16;
/**
 * Index is out of bounds.
 * @var int
 */
const FANN_E_INDEX_OUT_OF_BOUND = 17;
/**
 * Scaling parameters are not present.
 * @var int
 */
const FANN_E_SCALE_NOT_PRESENT = 18;
/**
 * Input count does not match network input neurons.
 * @var int
 */
const FANN_E_INPUT_NO_MATCH = 19;
/**
 * Output count does not match network output neurons.
 * @var int
 */
const FANN_E_OUTPUT_NO_MATCH = 20;
