<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = "Beispielbetreff";
    $mailfrom = $_POST['email'];
    $message = "Nachrichtentext";

    $mailto = "emmamarlen03@outlook.de";
    $headers = "From: ".$name;
    $text = "you have received an e-mail from ".$mailfrom."!\n\n".$message;


    mail($mailto, $subject, $text, $headers);
    header("Location: index.php?mailsend")
}

?>
