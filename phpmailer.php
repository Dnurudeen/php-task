<?php
    // ini_set("include_path", '/home/mmxgftdd/php:' . ini_get("include_path") );
    
    use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    

    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    if(isset($_POST['submit'])){
    
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
        //   $to = "info@ayoolasuite.com";
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $terms = $_POST['terms'];
    
    try {
        //Server settings
        $mail->SMTPDebug = true;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'xxxxxxxxxx';                     //SMTP username
        $mail->Password   = 'xxxxxxxxxx';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('info@ayoolasuite.com', "Ayoola's Suite and Apartments");
        $mail->addAddress('freestyle@gmail.com', 'Mr Deen');              //Name is optional
        $mail->addAddress($email, $fname);
        $mail->addReplyTo('freestyle@gmail.com', 'Mr Code');
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Alert! from Deen's Suite and Apartments.";
        $mail->Body    = "Name: $fname . ' ' . $lname <br>" . "Email: $email <br>" . "Terms: $terms <br><br><br><br>";
    
        $mail->send();
            echo "<div style='background-color: green; padding: 30px; color: white; text-align: center; margin-top: 35px; font-size: 20px;'>Congratulations! Your booking is being processed</div>"; 
            // echo "<script>alert('Booking has been sent successfully')</script>";
    } catch (Exception $e) {
        echo "<div style='background-color: red; padding: 30px; color: white; text-align: center; margin-top: 35px; font-size: 20px;'>Booking not successfully sent</div>";    
        
    }
    
    }
?>