<?php
// Start the session
session_start();

// Include the database connection
include('dbconn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = MD5($_POST['password']); // MD5 hash for password

    // Prepare and execute query to check if email and password exist
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, store session data
        $user = $result->fetch_assoc();
        $_SESSION['id'] = $users['id'];
        $_SESSION['email'] = $users['email'];
        $_SESSION['role'] = $users['role'];  // Assuming 'role' column exists (admin or user)
        
        // Redirect user to homepage or another page after login
        header("Location: index.php"); // Change this to wherever you want the user to go
        exit();
    } else {
        $error_message = "Invalid email or password!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="Images/LogoNumberOneHealth.png" alt="NumberOneHealth Logo" />
                <a>Number<span>ONE</span>Health</a>
            </a>
        </div>
    </header>

    <div class="container">
        <main>
            <div class="login-box">
                <h1>LOG IN</h1>
                <?php
                if (isset($error_message)) {
                    echo "<p style='color: red;'>$error_message</p>";
                }
                ?>
                <form action="login.php" method="post">
                    <div class="textbox">
                        <input type="email" placeholder="Email" name="email" required />
                    </div>
                    <div class="textbox">
                        <input type="password" placeholder="Password" name="password" required />
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="register">
                        <p>Don't have an account? <a href="registration.php">Register</a></p>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <footer>
        <div class="footer-top">
            <div class="footer-box">
                <div class="footer-grid">
                    <div class="footer-logo-info">
                        <h2><img src="Images/LogoNumberOneHealth.png" alt="Logo" class="footer-logo"> 
                        <a>Number<span>ONE</span>Health</a></h2>
                    </div>
                    <div class="footer-contact">
                        <i class="fa-regular fa-envelope-open"></i>
                        <p>Email: NumberOneHealth@gmail.com<br>Inquiries: infoOneHealth@gmail.com</p>
                    </div>
                    <div class="footer-contact">
                        <i class="fa-solid fa-phone"></i>
                        <p>Office Telephone: 0029129102320<br>Mobile: 000 2324 39493</p>
                    </div>
                    <div class="footer-contact">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Office Location:<br>Semangat Perjuangan No 100</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <p>© NumberOneHealth 2024 | All Rights Reserved by KelompokBiomedis</p>
        </div>
    </footer>
</body>
</html>
