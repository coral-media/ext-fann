
Creates a sparse neural network from a layer-size array.

***

* Full name: `fann_create_sparse_array`
* Defined in: `fann.stub.php`

## Parameters

| Parameter          | Type      | Description                             |
|--------------------|-----------|-----------------------------------------|
| `$connection_rate` | **float** | Sparse connection rate in range (0, 1]. |
| `$layers`          | **array** | Number of neurons for each layer.       |

## Return Value

**resource|false**

Neural network resource on success, false on failure.
