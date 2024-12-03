<?php
// Përfshini lidhjen me bazën e të dhënave
include 'connection.php'; // Sigurohuni që ky skedar të përmbajë informacionin e lidhjes me bazën e të dhënave

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Merrni email-in nga forma
    $email = $_POST['email'];

    // Kontrolloni nëse email-i është në bazën e të dhënave
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Nëse email-i ekziston, gjeneroni një lidhje për resetimin e fjalëkalimit
        $token = bin2hex(random_bytes(50)); // Gjeneroni një token të rastësishëm për siguri
        $expiry = time() + 3600; // Token-i do të jetë i vlefshëm për 1 orë

        // Ruani token-in në bazën e të dhënave për të lidhur me email-in
        $row = $result->fetch_assoc();
        $user_id = $row['id'];

        // Përdorni një query për të ruajtur token-in dhe afatin
        $update_sql = "INSERT INTO password_resets (user_id, token, expiry) VALUES (?, ?, ?)";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("iss", $user_id, $token, date("Y-m-d H:i:s", $expiry));
        $update_stmt->execute();

        // Gjeneroni një lidhje resetimi
        $reset_link = "http://yourwebsite.com/reset-password.php?token=" . $token;

        // Dërgoni email me lidhjen për të rikuperuar fjalëkalimin
        $subject = "Password Reset Request";
        $message = "Hi, \n\nTo reset your password, please click the following link: \n" . $reset_link . "\n\nThis link will expire in 1 hour.";
        $headers = "From: no-reply@yourwebsite.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "<p>A reset link has been sent to your email address.</p>";
        } else {
            echo "<p>There was an error sending the email. Please try again later.</p>";
        }
    } else {
        echo "<p>Email not found.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhysioPforz - Forget Password</title>
    <link rel="stylesheet" href="forgetpassword.css">
    <link rel="shortcut icon" href="img/logo/contact.jpg" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Forget Password</h2>
            <p>Enter your email address and we'll send you instructions to reset your password.</p>
            <form action="" method="POST">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <button type="submit">Send Reset Link</button>
                </div>
                <p>Remembered your password? <a href="login.php">Log In</a></p>
            </form>
        </div>
    </div>
</body>
</html>
