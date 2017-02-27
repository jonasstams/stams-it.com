 <?php
//if "email" variable is filled out, send email
if (isset($_REQUEST['email'])) {
    
    //Email information
    $to        = "jonas@stams-it.com";
    $email     = $_REQUEST['Email'];
    $telephone = $_REQUEST['Telephone'];
    $subject   = $_REQUEST['Subject'];
    $message   = $_REQUEST['Message'];
    $name      = $_REQUEST['Name'];
    
    $body = '
            <html>
            <head>
              <title>An email from JonasStams.be</title>
            </head>
            <body>
              <p>Here are the birthdays upcoming in August!</p>
              <table>
                <tr>
                  <td>Name</td><td>' . $name . '
                </tr>
                <tr>
                  <td>
                  Telephone</td><td>' . $telephone . '
                </tr>
                <tr>
                  <td>Email</td><td>' . $email . '
                </tr>
                <tr>
                  <td>Subject</td><td>' . $subject . '
                </tr>
                <tr>
                  <td>Message</td><td>' . $message . '
                </tr>

              </table>
            </body>
            </html>
            ';
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // More headers
    $headers .= 'From: ' . $email;
    //$headers .= 'Cc: myboss@example.com' . "\r\n";
    
    mail($to, $subject, $body, $headers);
    
    
    //Email response
    echo "Thank you for contacting me!";
?>
 <script>setTimeout(function(){
      window.location = '/views/contact.html';
    }, 2000);</script>
<?php
}

//if "email" variable is not filled out, display the form
else {
        echo "Thank you for contacting me!";
?>
 <script>setTimeout(function(){
      window.location = '/views/contact.html';
    }, 2000);</script>
<?php
}

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
?> 