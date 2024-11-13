<?php
// Database credentials
$servername = "localhost";  // Your database host (often 'localhost')
$username = "feedback_db";         // Your database username
$password = "feedback";             // Your database password (empty for default)
$dbname = "feedback";    // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the feedback form data from POST request
$satisfaction = $_POST['satisfaction'];
$food_recommendations = $_POST['food_recommendations'];
$food_variety = $_POST['food_variety'];
$restaurant_accuracy = $_POST['restaurant_accuracy'];
$restaurant_details_useful = $_POST['restaurant_details_useful'];
$food_culture_representation = $_POST['food_culture_representation'];
$restaurant_locations_easy = $_POST['restaurant_locations_easy'];
$add_restaurant = $_POST['add_restaurant'];
$recommendations = $_POST['recommendations'];
$other_comment = $_POST['other_comment'];
$user_email = $_POST['user_email'];

// Prepare SQL query to insert feedback data into the database
$sql = "INSERT INTO feedbacks (satisfaction, food_recommendations, food_variety, restaurant_accuracy,
        restaurant_details_useful, food_culture_representation, restaurant_locations_easy,
        add_restaurant, recommendations, other_comment, user_email)
        VALUES ('$satisfaction', '$food_recommendations', '$food_variety', '$restaurant_accuracy',
                '$restaurant_details_useful', '$food_culture_representation', '$restaurant_locations_easy',
                '$add_restaurant', '$recommendations', '$other_comment', '$user_email')";

// Execute the query and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
