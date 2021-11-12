<?php
session_start();
if (!isset($_POST["pogodi"])) {
$poruka1 = "Probaj pogoditi broj u intervalu od 1 do 9";
$poruka = "";
     $_POST["raspon"] = rand(1,9);
} else if ($_POST["pogodi"] > $_POST["raspon"]) { 
$poruka1 = "Probaj pogoditi broj u intervalu od 1 do 9";
    $poruka = "Krivi broj";
} else if ($_POST["pogodi"] < $_POST["raspon"]) {
$poruka1 = "Probaj pogoditi broj u intervalu od 1 do 9";
    $poruka = "Krivi broj";
} else { 
$poruka1 = "Probaj pogoditi broj u intervalu od 1 do 9";
    $poruka = "Pogodak!";
    print "Pogodio si broj "; print $_POST["pogodi"];
    $_POST["raspon"] = rand(1,9);
}
?>
<html>

    <head>
<img src="img/phplogo.png" alt="PHP logo">
        <title>PHP pogaðanje broja</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	   <meta name="author" content="Ivan Znaor">
         <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="my.css">
    </head>
    <body>
    <h1><?php echo $poruka1; ?></h1>
    <h2><?php echo $poruka; ?></h2>
        <form action="" method="POST">
        <p><strong>Unesi broj:</strong>
            <input type="text" name="pogodi"></p>
            <input type="hidden" name="raspon" 
                   value="<?php echo $_POST["raspon"]; ?>" ></p>
    <p><input type="submit" value="Unesi broj"/></p>
        </form>
    </body>
<footer>
      	<p>Ivan Znaor <a href="https://github.com/iznaor/Website-project"><img src="img/github.svg"title="Github" alt="Github" style="width:24px; margin-top:0.4em"></a></p>
	
    	</footer>
</html>
