
<?php 
if(isset($_POST['enviar'])){
    if (!empty($_POST['name'] && !empty($_POST['asunto']) && !empty($_POST['message']) && !empty($_POST['email']))) {
        /*$to = "ericveganoguera@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['name'];
        $last_name = $_POST['apellido'];
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from . "\r\n";
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $first_name . ", I will contact you shortly.";
        
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        // You cannot use header and echo together. It's one or the other.*/
        $to = "ericveganoguera@gmail.com";
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['message'];
        $email = $_POST['email'];
        $header = "From: " . $email . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();

        $mail = mail($to,$asunto,$msg,$header);
        
        if ($mail) {
            echo "<h4>Email enviado con exito!</h4>";
        }
    }
}

?>