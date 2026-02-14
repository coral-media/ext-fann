
Tests the network with one pattern and updates internal error state.

***

* Full name: `fann_test`
* Defined in: `fann.stub.php`

## Parameters

| Parameter         | Type         | Description              |
|-------------------|--------------|--------------------------|
| `$ann`            | **resource** | Neural network resource. |
| `$input`          | **array**    | Input vector.            |
| `$desired_output` | **array**    | Expected output vector.  |

## Return Value

**array|false**

Output vector on success, false on failure.
