<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<head>
	<title>PHP kalkulator</title>
    <meta name="author" content="Ivan Znaor">
</head>

<?php
$broj1 = $_POST['broj1'];
$broj2 = $_POST['broj2'];
$operator = $_POST['operator'];
$rezultat = '';
if (is_numeric($broj1) && is_numeric($broj2)) {
    switch ($operator) {
        case "Zbroji +":
           $rezultat = $broj1 + $broj2;
            break;
        case "Oduzmi -":
           $rezultat = $broj1 - $broj2;
            break;
        case "Pomnoži x":
            $rezultat = $broj1 * $broj2;
            break;
        case "Podijeli /":
            $rezultat = $broj1 / $broj2;
            break;
        case "Potenciranje x^n":
            $rezultat = pow($broj1, $broj2);

    }
}

?>

<body>
    <div id="page-wrap">
	<h1>PHP kalkulator</h1>
	  <form action="" method="post" id="">
            <p>
                <input type="number" name="broj1" id="broj1" required="required" value="<?php echo $broj1; ?>" /> <b>Unesi prvi broj</b>
            </p>
            <p>
                <input type="number" name="broj2" id="broj2" required="required" value="<?php echo $broj2; ?>" /> <b>Unesi drugi broj</b>
            </p>
            <p>
                <input readonly="readonly" name="rezultat" value="<?php echo $rezultat; ?>"> <b>Rezultat</b>
            </p>
            <input type="submit" name="operator" value="Zbroji +" />
            <input type="submit" name="operator" value="Oduzmi -" />
            <input type="submit" name="operator" value="Pomnoži x" />
            <input type="submit" name="operator" value="Podijeli /" />
            <input type="submit" name="operator" value="Potenciranje x^n">

	  </form>
    </div>
</body>
</html>