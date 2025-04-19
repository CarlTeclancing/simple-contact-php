<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $servername = "localhost";
  $username = "root";         // Change if needed
  $password = "";             // Your MySQL password
  $dbname = "student_info";   // Database name

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get form values
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Insert data
  $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
    $success = "Message submitted successfully!";
  } else {
    $error = "Error: " . $conn->error;
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 50px;
    }

    .form-container {
      background-color: white;
      max-width: 500px;
      margin: auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .message {
      text-align: center;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
    }

    .success {
      background-color: #d4edda;
      color: #155724;
    }

    .error {
      background-color: #f8d7da;
      color: #721c24;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Contact Us</h2>

    <?php if (!empty($success)): ?>
      <div class="message success"><?= $success ?></div>
    <?php elseif (!empty($error)): ?>
      <div class="message error"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
      <label for="name">Name</label>
      <input type="text" name="name" required>

      <label for="email">Email</label>
      <input type="email" name="email" required>

      <label for="message">Message</label>
      <textarea name="message" rows="5" required></textarea>

      <input type="submit" value="Send Message">
    </form>
  </div>

</body>
</html>
