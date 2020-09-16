<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>RK Briješće</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdb/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" href="img/logo.png">
</head>

<body>
  
  <div class="mail-container">

    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    if ($name === ''){
      echo "Name cannot be empty.";
      die();
    }
    
    if ($email === ''){
      echo "Email cannot be empty.";
      die();
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email format invalid.";
        die();
      }
    }
    
    if ($subject === ''){
      echo "Subject cannot be empty.";
      die();
    }
    
    if ($message === ''){
      echo "Message cannot be empty.";
      die();
    }

    $content="From: $name \nEmail: $email \nMessage: $message";
    $recipient = "info@rkbrijesce.com";
    $mailheader = "From: $email \r\n";
    
    mail($recipient, $subject, $content, $mailheader) or die("Error!");
    echo "<div class = 'message-sent'><h1>Email sent!</h1></div>";
    ?>

  </div>

</body>
</html>