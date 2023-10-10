<?php


// Code to handle form submission and room booking request
// You can implement the logic based on your requirements

?>

<!DOCTYPE html>
<html>
<head>
    <title>Room Booking Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container user">
    <h1>Room Booking Form</h1>
    <form action="process_booking.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
<?php 
 require 'footer.php'; 
 ?>
</html>
