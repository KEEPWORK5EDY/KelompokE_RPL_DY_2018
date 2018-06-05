<?php
     include '../../php/connection.php';

     $email=$_SESSION["email"];
     //$email="muammar.zikri.aksana@gmail.com";

     $kode=htmlentities(strip_tags(hash('sha256', mt_rand())));
     $syntax = sprintf("INSERT INTO aktivasi(id_aktivasi,kode) VALUES ('%s','%s');",$email,$kode);
     $query= mysqli_query($link,$syntax);
     $_SESSION["kode"]=$kode;

     require 'libphp-phpmailer/autoload.php';
     //Create a new PHPMailer instance
     $mail = new PHPMailer;
     //Tell PHPMailer to use SMTP
     $mail->isSMTP();
     //Enable SMTP debugging
     // 0 = off (for production use)
     // 1 = client messages
     // 2 = client and server messages
     $mail->SMTPDebug = 2;
     //Set the hostname of the mail server
     $mail->Host = 'smtp.gmail.com';
     // use
     // $mail->Host = gethostbyname('smtp.gmail.com');
     // if your network does not support SMTP over IPv6
     //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
     $mail->Port = 587;
     //Set the encryption system to use - ssl (deprecated) or tls
     $mail->SMTPSecure = 'tls';
     //Whether to use SMTP authentication
     $mail->SMTPAuth = true;
     //Username to use for SMTP authentication - use full email address for gmail
     $mail->Username = "muammar.clasic@gmail.com";
     //Password to use for SMTP authentication
     $mail->Password = "sudo-apt-get-update";
     //Set who the message is to be sent from
     $mail->setFrom('muammar.clasic@gmail.com');
     //Set an alternative reply-to address
     $mail->addReplyTo('muammar.clasic@gmail.com');
     //Set who the message is to be sent to
     $mail->addAddress($email);
     //Set the subject line
     $mail->Subject = 'WELCOME TO KEEP WORK ';
     //Read an HTML message body from an external file, convert referenced images to embedded,
     //convert HTML into a basic plain-text alternative body
     //$mail->msgHTML(file_get_contents('tes.html'), __DIR__);
     //Replace the plain text body with one created manually
     $data = array(
         'id' => 'bar',
         'kode' => 'boom'
     );
     $opts = array('http' =>
         array(
             'method'  => 'POST',
             'content' => $data
         )
     );

     $context  = stream_context_create($opts);

     $mail->Body = file_get_contents('email.php', false, $context);
     $mail->IsHTML(true);
     //Attach an image file
     //$mail->addAttachment('images/phpmailer_mini.png');
     //send the message, check for errors
     if (!$mail->send()) {
         echo "Mailer Error: ";// . $mail->ErrorInfo;
     } else {
         echo "Message sent!";
         //Section 2: IMAP
         //Uncomment these to save your message in the 'Sent Mail' folder.
         #if (save_mail($mail)) {
         #    echo "Message saved!";
         #}
     }
     //Section 2: IMAP
     //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
     //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
     //You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
     //be useful if you are trying to get this working on a non-Gmail IMAP server.
     function save_mail($mail)
     {
         //You can change 'Sent Mail' to any other folder or tag
         $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
         //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
         $imapStream = imap_open($path, $mail->Username, $mail->Password);
         $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
         imap_close($imapStream);
         return $result;
     }
 ?>
