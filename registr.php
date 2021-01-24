<! –– Haroun Ahmad, Jeremy Nigg --->


<html>

<head>
    <meta charset="UTF-8">
    <meta lang="de">
</head>

<body>

<form method="post">
    <label>Anrede</label>
    <select name="anrede" id="anrede">
        <option>Herr</option>
        <option>Frau</option>
    </select>
    <label>Vorname</label>
    <input type="text" name="vorname" >
    <label>Name</label>
    <input type="text" name="name" >
    <label>Telefon</label>
    <input type="tel" id="phone" name="phone">
    <input type="submit" onclick="adduser.php">
    <a href="adduser.php">Adduser</a>
</form>


<?php

session_start();

$_SESSION["anrede"] = $_POST["anrede"];
$_SESSION["vorname"] = $_POST["vorname"];
$_SESSION["name"] = $_POST["name"];
$_SESSION["tel"] = $_POST["phone"];
#TODO: check if inputs are valid then auto redirect to adduser.php
#TODO: when thats done Remove <a> on line 26
#use this for auto redirect: header("Location: adduser.php");


?>
</body>

</html>


