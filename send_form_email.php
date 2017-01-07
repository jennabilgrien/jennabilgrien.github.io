<?php
 
    
    //Which email address should it be sent to?
    $email_to = "jenna.bilgrien@gmail.com";
 
    $email_subject = "New Contact Form Submission";
 

 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $message = $_POST['message']; // required
 
    if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
    {
        show_error("E-mail address not valid");
    }
    
 
    $email_message = "First Name: ".$first_name."\n";
 
    $email_message .= "Last Name: ".$last_name."\n";
 
    $email_message .= "Email: ".$email_from."\n";
 
    $email_message .= "Telephone: ".$telephone."\n";
 
    $email_message .= "Message: ".$messsage."\n";
    
 
    // create email headers
 
    $headers = 'From: '.$email_from."\r\n".
 
    'Reply-To: '.$email_from."\r\n" .
 
    'X-Mailer: PHP/' . phpversion();
 
    $mail_sent = mail($email_to, $email_subject, $email_message, $headers);
 
    if ($mail_sent == true){ ?>
<script language="javascript" type="text/javascript">
alert('Thank you for the message. We will contact you shortly.');
window.location = 'contact-form.html';
</script>
<?php } else { ?>
<script language="javascript" type="text/javascript">
alert('Message not sent. Please, notify the site administrator admin@admin.com');
window.location = 'contact-form.html';
</script>


<?php
    }
    ?>
