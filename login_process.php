<?php
session_start();
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    try {
        // Prepare the statement using PDO
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id']    = $user['id'];
            $_SESSION['role']       = $user['role'];
            $_SESSION['name']       = $user['name'];
            $_SESSION['email']      = $user['email'];
            $_SESSION['login_time'] = time();

            // Redirect to role-specific dashboard
            switch ($user['role']) {
                case 'Donor':
                    header("Location: donor_dashboard.php");
                    break;
                case 'Recipient':
                    header("Location: recipient_dashboard.php");
                    break;
                case 'admin':
                    header("Location: admin_dashboard.php");
                    break;
                default:
                    header("Location: dashboard.php");
                    break;
            }
            exit;
        } else {
            $_SESSION['error'] = "Invalid email or password.";
            header("Location: login.php");
            exit;
        }

    } catch (PDOException $e) {
        $_SESSION['error'] = "Database error: " . $e->getMessage();
        header("Location: login.php");
        exit;
    }
}
?>
