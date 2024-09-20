<?php
try {
    // Code that may throw an exception
    $numerator = 10;
    $denominator = 0;
    
    if ($denominator === 0) {
        throw new Exception("Division by zero error");
    }
    
    $result = $numerator / $denominator;
    echo "Result: " . $result;
} catch (Exception $e) {
    // Handle the exception
    echo "Exception caught: " . $e->getMessage();
}
?>





<?php
// Triggering a custom error
$testVariable = 5;

if ($testVariable > 3) {
    trigger_error("The value of testVariable should be less than or equal to 3", E_USER_WARNING);
}
?>





<?php
// Define a custom exception class
class CustomException extends Exception {
    public function errorMessage() {
        // Error message
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
        .': '.$this->getMessage();
        return $errorMsg;
    }
}

// Example usage
function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new CustomException("Division by zero error");
    }
    
    return $numerator / $denominator;
}

try {
    // Test the divide function
    $result = divide(10, 0);
    echo "Result: " . $result;
} catch (CustomException $e) {
    // Catch the custom exception
    echo $e->errorMessage();
}
?>