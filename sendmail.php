<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/SMTP.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'stewjohnny79@gmail.com';
    $mail->Password = 'efptqwtrrqzudmjz';
    $mail->Port = 25;
    //sender
    $mail->setFrom('stewjohnny79@gmail.com', 'Privet');
    //receiver
    $mail->addAddress("kamilgwork@gmail.com");
    //email subject
    $mail->Subject = 'Questionnaire Request';

    //email body
    $body = '<h1>Hello</h1>';
    $body .= '<p>'.$_POST['name'].'</p>';
    $body .= '<p>'.$_POST['lastname'].'</p>';
    $body .= '<p>'.$_POST['phone'].'</p>';
    $body .= '<p>'.$_POST['email'].'</p>';

    $state = $_POST['state'];
    switch ($state) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }

    $mail->Body = $body;
    $mail->send();

    $response = ['message' => $message];
    header('Content-type: application/json');
    echo json_encode($response);
?>