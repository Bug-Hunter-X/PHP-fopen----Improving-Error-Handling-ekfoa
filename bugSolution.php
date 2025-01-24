```php
$file = fopen('myfile.txt', 'r');
if ($file) {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line
        echo $line;
    }
    fclose($file);
} else {
    $errorNumber = ferror($file);
    $errorMessage = ferror($file);
    switch ($errorNumber) {
        case 2:
            echo "Error: File does not exist.";
            break;
        case 13:
            echo "Error: Permission denied.";
            break;
        default:
            echo "Error opening file: " . $errorMessage;
    }
}
```