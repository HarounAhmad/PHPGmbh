<! –– Haroun Ahmad, Jeremy Nigg --->

<?php include 'header.html'?>

<?php include("navigation.html") ?>

<html>

<head>
    <meta lang="de">
    <style>
        form {
            margin-left: 200px;
        }
        input {
            display: grid;
        }
        textarea {
            display: grid;
        }
        #guestbooklink {
            margin-left: 200px;
        }
    </style>
</head>

<body>

<form method="post" action="addentry.php">
    <label>Name/Vorname</label>
    <input type="text" name="name"> <br>
    <label>Email</label>
    <input type="email" name="email"> <br>
    <label>Message</label>
    <textarea id="message" name="message" rows="5" cols="60"> </textarea>
    <br>
    <input type="submit"> <input type="reset">
</form>


<a href="guestbook_read.php" id="guestbooklink">[Gästebuch ansehen]</a>
</body>


</html>
<?php include("footer.html") ?>
