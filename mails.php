<$php

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $mailForm = $_POST['mail'];
    $text = $_POST['message'];
    $mailTo = "contact@microclub.net";
    $headers = "From: ".$mailFrom;
    $txt = "You received email from ".$mailForm.".\n\n".$text;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}


