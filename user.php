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

        <label for="date">Select Date:</label>
            <input type="date" class="form-control" name="date" min="<?php echo date('Y-m-d'); ?>"><br>

        <label for="time">Select Time:</label>
            <select class="form-control" name="time">
                <option value="pagi">08.00 - 11.00 WIB</option>
                <option value="siang">13.00 - 16.00 WIB</option>
            </select><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    <div id="submit-message" style="display: none;">
            <p>Formulir telah berhasil disubmit!</p>
        </div>
        <script type="text/javascript">
        function showSubmitMessage() {
            document.getElementById('submit-message').style.display = 'block';
        }
    </script>
</div>
</body>
<?php 
 require 'footer.php'; 
 ?>
</html>
