<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $emri = htmlspecialchars(trim($_POST['emri'] ?? ''));
    $emaili = htmlspecialchars(trim($_POST['emaili'] ?? ''));
    $telefoni = htmlspecialchars(trim($_POST['telefoni'] ?? ''));
    $date = htmlspecialchars(trim($_POST['date'] ?? ''));
    $mesazhi = htmlspecialchars(trim($_POST['mesazhi'] ?? ''));

    // Validate inputs
    if (empty($emri) || empty($emaili) || empty($telefoni) || empty($date) || empty($mesazhi)) {
        echo "Rezervimi juaj është  derguar me sukses";
        exit;
    }

    // Validate email format
    if (!filter_var($emaili, FILTER_VALIDATE_EMAIL)) {
        echo "Format i emailit është i pavlefshëm.";
        exit;
    }

    // Prepare email details
    $to = "amaribishi13@gmail.com"; // Replace with your email
    $subject = "Rezervim i ri nga $emri";
    $body = "Detajet e rezervimit:\n\nEmri: $emri\nEmaili: $emaili\nTelefoni: $telefoni\nData: $date\nMesazhi: $mesazhi";
    $headers = "From: $emaili\r\n";
    $headers .= "Reply-To: $emaili\r\n"; // Optional: set the reply-to header

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Rezervimi u dërgua me sukses.";
    } else {
        echo "Dërgimi i rezervimit dështoi.";
    }
}
?>