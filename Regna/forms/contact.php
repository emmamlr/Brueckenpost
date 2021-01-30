<?php

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['email'];
    
    $message = $_POST['message'];
    $mailto = "emmamarlen03@outlook.de";
    $headers = "Gesendet von: ".$name;
    $text = "Sie haben eine E-Mail von ".$mailfrom." erhalten!\n\n".$message;

    mail($mailto, $subject, $text, $headers);
    header("Location: index.php?mailsend");
  }

?>
