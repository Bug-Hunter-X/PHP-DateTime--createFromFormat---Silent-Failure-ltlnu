```php
$date = date('Y-m-d');
$time = date('H:i:s');

$dateTime = DateTime::createFromFormat('Y-m-d H:i:s', "$date $time");
if ($dateTime === false) {
    // Handle the error
    echo "Error creating DateTime object.";
}
```