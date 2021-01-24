<! –– Haroun Ahmad, Jeremy Nigg --->



<html>

<head>
    <meta lang="de">
</head>
<body>



<?php
session_start();
$anrede = $_SESSION["anrede"];
$vorname = $_SESSION["vorname"];
$name = $_SESSION["name"];
$tel = $_SESSION["tel"];

echo "anrede: " . $anrede . "<br>" . "Vorname: " . $vorname . "<br>" . "Name: " . $name . "<br>" . "Tel: " . $tel;

$users = fopen("user.txt", "a");

fwrite($users, $anrede . "\n" . $vorname . "\n" . $name . "\n" . $tel . "\n\n");
fclose($users);

/*
$users = file_put_contents("users.txt", $anrede.PHP_EOL . $vorname.PHP_EOL . $name.PHP_EOL . $tel.PHP_EOL);
*/
?>
<br><br>
<a href="registr.php">goback</a>
</body>
</html>
