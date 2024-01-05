<?php
// get data from form
$name = $_POST['nom'];
$email = $_POST['adresse_mail'];
$message = $_POST['votre_message'];
$objet = $_POST['objet_message'];
$to = "samy.dziri22@gmail.com";
$subject = "Mail From website";
$txt = "nom = " . $name . "\r\n adresse_mail = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" . "CC: somebodyelse@example.com";

if ($email != NULL) {
    // attempt to send mail
    if (mail($to, $subject, $txt, $headers)) {
        // email sent successfully
        header("Location: carte.php"); // redirect to success page
    } else {
        // email sending failed
        echo "Error sending email. Please try again later."; // display an error message
    }
} else {
    // email is empty
    echo "Email address is required."; // display an error message
}
?>


