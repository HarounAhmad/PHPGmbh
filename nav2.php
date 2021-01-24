<! –– Haroun Ahmad, Jeremy Nigg --->




<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Navigation</title>
	<meta name="author" content="Pius Senn">
	<base target="Hauptframe">
	<link rel="stylesheet" href="formate.css" type="text/css">
</head>

<body bgcolor="#9999FF">
	<h2>Rubriken</h2>
	<?php
		$verzeichnis = opendir(getcwd());
		while ($datei = readdir($verzeichnis))
		{
			if ( is_file($datei) )
			{
				if ( strstr($datei, "index") )
				{
					$indexLink = "<p class='link'><a href='$datei' target='_top'>Home</a></p>";
				}
				elseif ( (! strstr($datei, "titel.")) && (! strstr($datei, "frame.")) && (! strstr($datei, ".css")) && ($datei != "nav.php") && ($datei != "leer.htm") )
				{
					$text = str_replace(".htm", "", $datei);
					$text = str_replace("_", " ", $text);
					$text = ucwords($text);
					$text = str_replace("ae", "&auml;", $text);
					$text = str_replace("oe", "&ouml;", $text);
					$text = str_replace("ue", "&uuml;", $text);
					$text = str_replace("Ae", "&Auml;", $text);
					$text = str_replace("Oe", "&Ouml;", $text);
					$text = str_replace("Ue", "&Uuml;", $text);
					echo "<p class='link'><a href='$datei' target='hauptframe'>$text</a></p>";
				}
			}
		}
		closedir($verzeichnis);

		echo "$indexLink"; 
?>
</body>

</html>
