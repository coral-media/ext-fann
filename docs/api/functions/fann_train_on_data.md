
Trains the network using an in-memory training dataset.

***

* Full name: `fann_train_on_data`
* Defined in: `fann.stub.php`

## Parameters

| Parameter                 | Type         | Description              |
|---------------------------|--------------|--------------------------|
| `$ann`                    | **resource** | Neural network resource. |
| `$train_data`             | **resource** | Training data resource.  |
| `$max_epochs`             | **int**      | Maximum training epochs. |
| `$epochs_between_reports` | **int**      | Reporting interval.      |
| `$desired_error`          | **float**    | Target error threshold.  |

## Return Value

**bool**
