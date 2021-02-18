<?php
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $value = '154';
    $arr = array("rejwanahmed143342@gmail.com", "rejwancse10@gmail.com");
    // $mail->isSMTP(); // for localhost use enable this line otherwise don't use it

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';

        $mail->Username = 'jkkniuelection@gmail.com'; // Sender Email Id
        $mail->Password = 'jkkniu_2021_election'; // password of gmail

        $mail->setFrom('jkkniuelection@gmail.com','JKKNIU');
        for($i=0;$i<2;$i++)
        {
            $mail->addAddress($arr[$i]); // Receiver Email Address
            $mail->addReplyTo('jkkniuelection@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = "JKKNIU VOTING SYSTEM";
            $mail->Body = '<h1 align = center>Again Trying JKKNIU Teachers Online Voting System</h1> </br> <a href="https://www.youtube.com/">Link For Youtube</a> <br /> <p>Voter ID ='.$i.'</p>';
           $mail->send();
           $mail->ClearAddresses();
        }

?>
