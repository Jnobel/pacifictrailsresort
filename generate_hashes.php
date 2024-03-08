<?php
$secret_key = "62cbefbefc9e40d9f7d4e649e6c6b6d1";

// Function to generate hash for a product
function generate_hash($product, $price, $units, $secret_key) {
    $description = substr($product, 0, 10); // Limit description to first 10 characters
    return md5($secret_key . $description . $price . $units);
}

// Generate hashes for each product
$hash_trailguide = generate_hash("Pacific Trails Hiking Guide", "19.95", "1", $secret_key);
$hash_yurtyoga = generate_hash("Yurt Yoga", "24.95", "1", $secret_key);
?>
