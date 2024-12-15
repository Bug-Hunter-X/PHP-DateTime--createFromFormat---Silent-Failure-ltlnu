```php
$date = date('Y-m-d');
$time = date('H:i:s');

$dateTime = DateTime::createFromFormat('Y-m-d H:i:s', "$date $time");
if ($dateTime === false) {
    // Handle the error appropriately
    error_log("Error creating DateTime object from: $date $time"); // Log the error
    // Consider throwing an exception or using a default value
    $dateTime = new DateTime(); // Use current time as a fallback
}

echo $dateTime->format('Y-m-d H:i:s');
```