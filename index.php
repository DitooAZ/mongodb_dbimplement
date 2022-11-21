<?php

$manager = new MongoDB\Driver\Manager ("mongodb+srv://ananditoaz:12345@ananditoazz.78oyist.mongodb.net/?retryWrites=true&w=majority");

// Query Class
$query = new MongoDB\Driver\Query(array("restaurant_id" => "40356018"));

// Select Database Collection
$cursor = $manager->executeQuery('sample_restaurants.restaurants', $query);

// Convert cursor to array and print results
echo "<pre>";
print_r($cursor->toArray());
echo "<pre>";

?>