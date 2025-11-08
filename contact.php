<?php
include 'db_config.php';

// Initialize variables for feedback messages
$success_msg = '';
$error_msg = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $subject = '';

    if (empty($name) || empty($email) || empty($message)) {
        $error_msg = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = "Please enter a valid email address.";
    } else {
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
        if ($stmt) {
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->bindValue(':subject', $subject, PDO::PARAM_STR);
            $stmt->bindValue(':message', $message, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $success_msg = "Thank you, your message has been sent successfully.";
                $_POST = [];
            } else {
                $error_msg = "Error: Could not submit your message. Please try again later.";
            }
        } else {
            $error_msg = "Database error: Could not prepare statement.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us – RoktoSheba</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(to right, #f2f2f2, #f9f9f9);
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background-color: #c0392b;
    }
    .navbar-brand, .nav-link {
      color: #fff !important;
      font-weight: 600;
    }
    .hero {
      padding: 60px 20px;
      background-color: #e74c3c;
      color: white;
      text-align: center;
    }
    .contact-form {
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      margin-top: -50px;
    }
    .footer {
      background-color: #2c3e50;
      color: #fff;
      padding: 15px;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php"><i class="fas fa-hand-holding-heart"></i> RoktoSheba</a>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="donor_list.php">Find Donor</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="reg.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="hero">
  <h1>Contact Us</h1>
  <p>Have questions, suggestions, or want to collaborate? We’re here to listen!</p>
</div>

<!-- Contact Form -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <!-- Feedback messages -->
      <?php if ($success_msg): ?>
        <div class="alert alert-success"><?= htmlspecialchars($success_msg) ?></div>
      <?php elseif ($error_msg): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error_msg) ?></div>
      <?php endif; ?>

      <form class="contact-form" method="post" action="">
        <div class="mb-3">
          <label class="form-label">Your Name</label>
          <input type="text" name="name" class="form-control" required value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Your Email</label>
          <input type="email" name="email" class="form-control" required value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Message</label>
          <textarea name="message" class="form-control" rows="5" required><?= isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '' ?></textarea>
        </div>
        <button type="submit" class="btn btn-danger">Send Message</button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  &copy; <?= date("Y") ?> RoktoSheba. All rights reserved.
</div>

</body>
</html>
