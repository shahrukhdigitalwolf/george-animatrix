<?php
    if(isset($_POST['submit']))
    {   
        $captcha_response = $_POST['g-recaptcha-response'];
        
        //$secret_key = '6LfuarkkAAAAAC12yMOjNHT3wNat2TRYGpjc0lIP';
        $secret_key = '6Le6ePAbAAAAAC3pQ_FQF_B1SEMvYTnN_yMlNPz3';

        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$captcha_response);
        $response_data = json_decode($response);
        // echo "<pre>";
        // var_dump($captcha_response);
        // var_dump($response_data);
        // die();
        if ($response_data->success) {
            //echo "its my life";
            // Read Data from Form
            //$subjects = filter_input(INPUT_POST, "subjectf");
            $full_name = filter_input(INPUT_POST, "name");
            $email = filter_input(INPUT_POST, "email");
            $phone = filter_input(INPUT_POST, "mobile");
            $services = filter_input(INPUT_POST, "Course");
            $yourmsg = filter_input(INPUT_POST, "message");               
            $email_from = "info@digitalwolf.co.in";//"leads.animatrix@gmail.com";
            $email_subject = "Website Enquriy: George Animatrix";

            ////$mail->IsHTML(true);


            $email_body = "<table width='100%'  border='0' height='150px'>";

            $email_body = $email_body . "<tr>";

            $email_body = $email_body . "<td colspan='2' style='text-align:left; color:#FFF' bgcolor='#2D9DCE'>";

            $email_body = $email_body . "&nbsp;&nbsp;You have received a New Enquiry";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "</tr>";



            $email_body = $email_body . "<tr>";

            $email_body = $email_body . "<td  width='25%' style='text-align:right' bgcolor='#EBF2F6'>";

            $email_body = $email_body . "Name :";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "<td width='75%' style='text-align:left' bgcolor='#FFFFFF'>";

            $email_body = $email_body . "<span>" .$full_name. "</span>";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "</tr>";




            $email_body = $email_body . "<tr>";

            $email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

            $email_body = $email_body . "Email :";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

            $email_body = $email_body . "<span>" .$email. "</span>";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "</tr>";



            $email_body = $email_body . "<tr>";

            $email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

            $email_body = $email_body . "Contact No :";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

            $email_body = $email_body . "<span>" .$phone. "</span>";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "</tr>";


            $email_body = $email_body . "<tr>";

            $email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

            $email_body = $email_body . "Course :";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

            $email_body = $email_body . "<span>" .$services. "</span>";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "</tr>";



            				

            $email_body = $email_body . "<tr>";

            $email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

            $email_body = $email_body . "Message :";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

            $email_body = $email_body . "<span>" .$yourmsg. "</span>";

            $email_body = $email_body . "</td>";

            $email_body = $email_body . "</tr>";



            $email_body = $email_body . "<tr>";

            $email_body = $email_body . "<td colspan='2' style='text-align:center; color:#FFF' bgcolor='#2D9DCE'> &nbsp; </td>";

            $email_body = $email_body . "</tr>";

            $email_body = $email_body . "</table>";


            /////////////

            $to = "leads.animatrix@gmail.com";
            
            require("class.phpmailer.php");
            $mail = new PHPMailer();
            //$mail->IsSMTP();
            $mail->Mailer = "mail";
            $mail->Host = "webmail.digitalwolf.co.in";
            //$mail->SMTPAuth = true;
            $mail->Username = "info@digitalwolf.co.in";
            $mail->Password = "Info@32145";
            $mail->host_port=25;
            //$mail->SMTPSecure = 995;
            $mail->Subject = $email_subject;
            $mail->From = $email_from;
            $mail->FromName = "Enquiry";
            $mail->WordWrap = 50;
            $mail->IsHTML(true);
            $mail->AddAddress($to);
            $mail->AddCC("nknitinkumar7194@gmail.com");
            $mail->AddBCC("003animeshdey@gmail.com");
            $mail->Body =$email_body;
            /////////////
            if(!$mail->Send()){
                echo "Message has been not sent<p>";
                echo "Mailer Success: " . $mail->ErrorInfo;
                exit;
            }else{
    		  echo "<script> setTimeout(function () { window.location.href= 'thankyou.html';},500);</script>";
            }
        }else{
            echo "<script> alert('Captcha Invalid'); </script>";   
            echo "<script> setTimeout(function () { window.location.href= 'https://www.georgeanimatrix.com/';},500);</script>";    
        }
    }
    else
    {
        //echo "<script> alert('".$email_body."'); </script>";
        // echo "empty submit";
    }
?>