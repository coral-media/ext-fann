/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: 7740678fc3137fb430318eba133918b116edde19 */

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_version, 0, 0, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_create_standard, 0, 1, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, num_layers, IS_LONG, 0)
	ZEND_ARG_VARIADIC_TYPE_INFO(0, layers, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_create_standard_array, 0, 1, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, layers, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_create_sparse, 0, 2, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, connection_rate, IS_DOUBLE, 0)
	ZEND_ARG_TYPE_INFO(0, num_layers, IS_LONG, 0)
	ZEND_ARG_VARIADIC_TYPE_INFO(0, layers, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_create_sparse_array, 0, 2, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, connection_rate, IS_DOUBLE, 0)
	ZEND_ARG_TYPE_INFO(0, layers, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

#define arginfo_fann_create_shortcut arginfo_fann_create_standard

#define arginfo_fann_create_shortcut_array arginfo_fann_create_standard_array

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_create_from_file, 0, 1, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, configuration_file, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_copy, 0, 1, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_destroy, 0, 1, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_save, 0, 2, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, configuration_file, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_run, 0, 2, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, input, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_print_parameters, 0, 1, IS_VOID, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_create_train, 0, 3, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, num_data, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, num_input, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, num_output, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_read_train_from_file, 0, 1, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, filename, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_save_train, 0, 2, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, train_data, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, filename, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_destroy_train, 0, 1, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, train_data, IS_MIXED, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_train, 0, 3, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, input, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, desired_output, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_train_on_data, 0, 5, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, train_data, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, max_epochs, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, epochs_between_reports, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, desired_error, IS_DOUBLE, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_train_on_file, 0, 5, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, filename, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, max_epochs, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, epochs_between_reports, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, desired_error, IS_DOUBLE, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_test, 0, 3, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, input, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, desired_output, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_get_MSE, 0, 1, IS_DOUBLE, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
ZEND_END_ARG_INFO()

#define arginfo_fann_reset_MSE arginfo_fann_destroy

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_get_bit_fail, 0, 1, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_set_training_algorithm, 0, 2, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, training_algorithm, IS_LONG, 0)
ZEND_END_ARG_INFO()

#define arginfo_fann_get_training_algorithm arginfo_fann_get_bit_fail

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_set_learning_rate, 0, 2, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, learning_rate, IS_DOUBLE, 0)
ZEND_END_ARG_INFO()

#define arginfo_fann_get_learning_rate arginfo_fann_get_MSE

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_set_activation_function_hidden, 0, 2, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, activation_function, IS_LONG, 0)
ZEND_END_ARG_INFO()

#define arginfo_fann_set_activation_function_output arginfo_fann_set_activation_function_hidden

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_fann_get_activation_function, 0, 3, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, ann, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, layer, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, neuron, IS_LONG, 0)
ZEND_END_ARG_INFO()


ZEND_FUNCTION(fann_version);
ZEND_FUNCTION(fann_create_standard);
ZEND_FUNCTION(fann_create_standard_array);
ZEND_FUNCTION(fann_create_sparse);
ZEND_FUNCTION(fann_create_sparse_array);
ZEND_FUNCTION(fann_create_shortcut);
ZEND_FUNCTION(fann_create_shortcut_array);
ZEND_FUNCTION(fann_create_from_file);
ZEND_FUNCTION(fann_copy);
ZEND_FUNCTION(fann_destroy);
ZEND_FUNCTION(fann_save);
ZEND_FUNCTION(fann_run);
ZEND_FUNCTION(fann_print_parameters);
ZEND_FUNCTION(fann_create_train);
ZEND_FUNCTION(fann_read_train_from_file);
ZEND_FUNCTION(fann_save_train);
ZEND_FUNCTION(fann_destroy_train);
ZEND_FUNCTION(fann_train);
ZEND_FUNCTION(fann_train_on_data);
ZEND_FUNCTION(fann_train_on_file);
ZEND_FUNCTION(fann_test);
ZEND_FUNCTION(fann_get_MSE);
ZEND_FUNCTION(fann_reset_MSE);
ZEND_FUNCTION(fann_get_bit_fail);
ZEND_FUNCTION(fann_set_training_algorithm);
ZEND_FUNCTION(fann_get_training_algorithm);
ZEND_FUNCTION(fann_set_learning_rate);
ZEND_FUNCTION(fann_get_learning_rate);
ZEND_FUNCTION(fann_set_activation_function_hidden);
ZEND_FUNCTION(fann_set_activation_function_output);
ZEND_FUNCTION(fann_get_activation_function);


static const zend_function_entry ext_functions[] = {
	ZEND_FE(fann_version, arginfo_fann_version)
	ZEND_FE(fann_create_standard, arginfo_fann_create_standard)
	ZEND_FE(fann_create_standard_array, arginfo_fann_create_standard_array)
	ZEND_FE(fann_create_sparse, arginfo_fann_create_sparse)
	ZEND_FE(fann_create_sparse_array, arginfo_fann_create_sparse_array)
	ZEND_FE(fann_create_shortcut, arginfo_fann_create_shortcut)
	ZEND_FE(fann_create_shortcut_array, arginfo_fann_create_shortcut_array)
	ZEND_FE(fann_create_from_file, arginfo_fann_create_from_file)
	ZEND_FE(fann_copy, arginfo_fann_copy)
	ZEND_FE(fann_destroy, arginfo_fann_destroy)
	ZEND_FE(fann_save, arginfo_fann_save)
	ZEND_FE(fann_run, arginfo_fann_run)
	ZEND_FE(fann_print_parameters, arginfo_fann_print_parameters)
	ZEND_FE(fann_create_train, arginfo_fann_create_train)
	ZEND_FE(fann_read_train_from_file, arginfo_fann_read_train_from_file)
	ZEND_FE(fann_save_train, arginfo_fann_save_train)
	ZEND_FE(fann_destroy_train, arginfo_fann_destroy_train)
	ZEND_FE(fann_train, arginfo_fann_train)
	ZEND_FE(fann_train_on_data, arginfo_fann_train_on_data)
	ZEND_FE(fann_train_on_file, arginfo_fann_train_on_file)
	ZEND_FE(fann_test, arginfo_fann_test)
	ZEND_FE(fann_get_MSE, arginfo_fann_get_MSE)
	ZEND_FE(fann_reset_MSE, arginfo_fann_reset_MSE)
	ZEND_FE(fann_get_bit_fail, arginfo_fann_get_bit_fail)
	ZEND_FE(fann_set_training_algorithm, arginfo_fann_set_training_algorithm)
	ZEND_FE(fann_get_training_algorithm, arginfo_fann_get_training_algorithm)
	ZEND_FE(fann_set_learning_rate, arginfo_fann_set_learning_rate)
	ZEND_FE(fann_get_learning_rate, arginfo_fann_get_learning_rate)
	ZEND_FE(fann_set_activation_function_hidden, arginfo_fann_set_activation_function_hidden)
	ZEND_FE(fann_set_activation_function_output, arginfo_fann_set_activation_function_output)
	ZEND_FE(fann_get_activation_function, arginfo_fann_get_activation_function)
	ZEND_FE_END
};

static void register_fann_symbols(int module_number)
{
	REGISTER_LONG_CONSTANT("FANN_TRAIN_INCREMENTAL", 0, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_TRAIN_BATCH", 1, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_TRAIN_RPROP", 2, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_TRAIN_QUICKPROP", 3, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_TRAIN_SARPROP", 4, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_LINEAR", 0, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_THRESHOLD", 1, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_THRESHOLD_SYMMETRIC", 2, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_SIGMOID", 3, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_SIGMOID_STEPWISE", 4, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_SIGMOID_SYMMETRIC", 5, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_SIGMOID_SYMMETRIC_STEPWISE", 6, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_GAUSSIAN", 7, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_GAUSSIAN_SYMMETRIC", 8, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_GAUSSIAN_STEPWISE", 9, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_ELLIOT", 10, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_ELLIOT_SYMMETRIC", 11, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_LINEAR_PIECE", 12, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_LINEAR_PIECE_SYMMETRIC", 13, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_SIN_SYMMETRIC", 14, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_COS_SYMMETRIC", 15, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_SIN", 16, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_COS", 17, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_ERRORFUNC_LINEAR", 0, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_ERRORFUNC_TANH", 1, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_STOPFUNC_MSE", 0, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_STOPFUNC_BIT", 1, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_NETTYPE_LAYER", 0, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_NETTYPE_SHORTCUT", 1, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_NO_ERROR", 0, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_OPEN_CONFIG_R", 1, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_OPEN_CONFIG_W", 2, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_WRONG_CONFIG_VERSION", 3, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_READ_CONFIG", 4, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_READ_NEURON", 5, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_READ_CONNECTIONS", 6, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_WRONG_NUM_CONNECTIONS", 7, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_OPEN_TD_W", 8, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_OPEN_TD_R", 9, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_READ_TD", 10, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_ALLOCATE_MEM", 11, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_TRAIN_ACTIVATION", 12, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_USE_ACTIVATION", 13, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_TRAIN_DATA_MISMATCH", 14, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_CANT_USE_TRAIN_ALG", 15, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_TRAIN_DATA_SUBSET", 16, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_INDEX_OUT_OF_BOUND", 17, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_SCALE_NOT_PRESENT", 18, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_INPUT_NO_MATCH", 19, CONST_PERSISTENT);
	REGISTER_LONG_CONSTANT("FANN_E_OUTPUT_NO_MATCH", 20, CONST_PERSISTENT);
}
