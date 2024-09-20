<?php
// Directory containing the images
$imageDir = 'img/';

// Get all image files from the directory
$images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Check if the directory contains any images
if ($images && count($images) > 0) {
    // Select a random image
    $randomImage = $images[array_rand($images)];

    // Display the random image
    echo '<img src="' . $randomImage . '" alt="Random Image">';
} else {
    echo 'No images found in the directory.';
}
?>
