<?php
// login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RoktoSheba | Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(to right, #6f0000, #200122);
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }
    .form-container {
      max-width: 500px;
      margin: auto;
      background: #1f1f1f;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(255,0,0,0.4);
    }
    h2 {
      color: #ff4c4c;
      text-align: center;
      margin-bottom: 30px;
    }
    .form-control {
      background-color: #2d2d2d;
      color: white;
      border: 1px solid #ff4c4c;
    }
    .btn-custom {
      background-color: #ff4c4c;
      border: none;
    }
    .btn-custom:hover {
      background-color: #e43f3f;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="form-container">
      <h2>Login to RoktoSheba</h2>
      <form action="login_process.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-custom w-100">Login</button>
      </form>
      <p class="text-center mt-3">Don't have an account? <a href="reg.php" style="color:#ffaaaa">Register</a></p>
    </div>
  </div>
</body>
</html>
