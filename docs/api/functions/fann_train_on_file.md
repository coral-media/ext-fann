
Trains the network using a training-data file.

***

* Full name: `fann_train_on_file`
* Defined in: `fann.stub.php`

## Parameters

| Parameter                 | Type         | Description              |
|---------------------------|--------------|--------------------------|
| `$ann`                    | **resource** | Neural network resource. |
| `$filename`               | **string**   | Training-data file path. |
| `$max_epochs`             | **int**      | Maximum training epochs. |
| `$epochs_between_reports` | **int**      | Reporting interval.      |
| `$desired_error`          | **float**    | Target error threshold.  |

## Return Value

**bool**
