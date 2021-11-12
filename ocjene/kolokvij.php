<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Prosjek ocjena</title>
	</head>

	<body>
		<h1>Konačna ocjena nakon dva kolokvija</h1>
		<?php
		
		if(!isset($_POST['action'])){
            $_POST['action'] = FALSE;
        }
		if ($_POST['action']  != TRUE){
		print '
				<form action="" method="post" >
				<input type="hidden" id="action" name="action" value="TRUE"><br>
				<label for="kolokvij1">Ocjena prvog kolokvija: </label>
				<input type="number" id="kolokvij1" name="kolokvij1"><br>
				<label for="kolokvij2">Ocjena drugog kolokvija: </label>
				<input type="number" id="kolokvij2" name="kolokvij2"><br>
				<input type="submit" value="Pošalji"> 
			</form>';
		}
		else if ($_POST['action']  == TRUE){
			$ocjene = array($_POST['kolokvij1'], $_POST['kolokvij2']);
		
			if(($ocjene[0]<1 || $ocjene[1]<1) || ($ocjene[0]>5 || $ocjene[1]>5)){
				echo "Krivi unos!";
			}
			elseif($ocjene[0]==1 || $ocjene[1]==1){
                echo "Oba kolokvija moraju biti pozitivna za konačnu pozitivnu ocjenu";
			}
			else{
                $zbroj=$ocjene[0]+$ocjene[1];
				$konačnaOcjena = ($ocjene[0] + $ocjene[1]) /2;
                if($ocjene[0]==$ocjene[1]){
                echo "Ocjena prvog kolokvija je: $ocjene[0]"; echo "<br>";
				echo "Ocjena drugog kolokvija je: $ocjene[1]"; echo "<br>";
				echo "Konačna ocjena je: " .round($konačnaOcjena);
                }elseif($ocjene[0]!=$ocjene[1]){
                    echo "Ocjena prvog kolokvija je: $ocjene[0]"; echo "<br>";
                    echo "Ocjena drugog kolokvija je: $ocjene[1]"; echo "<br>";
                    echo "Zbroj ocjena je $zbroj"; echo "<br>";;
                    echo "Prosjek je: $konačnaOcjena"; echo "<br>";
                    echo "Konačna ocjena je: " .round($konačnaOcjena);
                }
			}
		}
		?>
	</body>
</html>