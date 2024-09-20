<?php
// Function to calculate the number of days between two dates
function daysBetweenDates($startDate, $endDate) {
    // Create DateTime objects from the provided dates
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);

    // Calculate the difference between the two dates
    $interval = $start->diff($end);

    // Return the number of days as an integer
    return $interval->days;
}

// Example usage
$startDate = '2023-05-01'; // YYYY-MM-DD format
$endDate = '2024-05-15';

$days = daysBetweenDates($startDate, $endDate);
echo "The number of days between $startDate and $endDate is $days days.";
?>
