<! –– Haroun Ahmad, Jeremy Nigg --->



<?php
$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["message"];

$guestbook = fopen("guestbook.txt", "a");
fwrite($guestbook, $name . "\n" . $email . "\n" . $msg . "\n\n");
fclose($guestbook);
header("Location: guestbook.php");

?>
