<!DOCTYPE html>
<html>
<head>
    <title>Contact - MyDoctor Portal</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    echo "<h2>Thank you for contacting us, $name!</h2>";
    echo "<p>We have received your message:</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
}
?>

    <header>
        <h1>MyDoctor - Contact Us</h1>
        
    </header>
    <nav>
            <a href="Homepage.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>
    
    <div class="container">
        <h2>Contact Us</h2>
        
        <div class="contact-form">
            <form method="post" action="process_contact.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" >
                
                <label for="message">Message</label>
                <textarea id="message" name="message" ></textarea>
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    
<br>
<br>
<br>
<br>
<br>
    <footer>
        <p>&copy; 2023 MyDoctor. All rights reserved.</p>
    </footer>
</body>
</html>
