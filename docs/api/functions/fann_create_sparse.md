
Creates a sparse neural network from variadic layer sizes.

***

* Full name: `fann_create_sparse`
* Defined in: `fann.stub.php`

## Parameters

| Parameter          | Type      | Description                                                |
|--------------------|-----------|------------------------------------------------------------|
| `$connection_rate` | **float** | Sparse connection rate in range (0, 1].                    |
| `$num_layers`      | **int**   | Total number of layers, including input and output layers. |
| `$layers`          | **int**   | Number of neurons for each layer.                          |

## Return Value

**resource|false**

Neural network resource on success, false on failure.
