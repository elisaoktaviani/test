<html>
<head>
<title></title>
</head>
<body>
<form method="POST" action="tes_cek.php">
<input type="checkbox" name="hobi[]" value="Makan">Makan <br />
<input type="checkbox" name="hobi[]" value="Minum">Minum <br />
<input type="checkbox" name="hobi[]" value="Tidur">Tidur <br />
<input type="checkbox" name="hobi[]" value="Browsing">Browsing <br />
<input type="submit" name="submit" value="Input">
</form>
</body>
</html>



<?php
//CODE 1
$jumlah = count($_POST['hobi']); //menghitung jumlah value yang di centang
for($i=0; $i<$jumlah; $i++){
           echo $_POST['hobi'][$i]."-";
}
//END CODE 1
echo "<hr>";

//CODE 2
$value = (count($_POST['hobi']) > 0) ? implode('-', $_POST['hobi']) : ""; 
echo "<br>$value";
//END CODE 2
echo "<hr>";

//CODE 3
foreach($_POST['hobi'] as $hobby) {
echo "<p>".$hobby ."</p>"; //Print all the hobi
// Alert hobi using JS
$show = "<p>".$hobby ."</p>";
echo "<script type='text/javascript'>alert(\"Your hobi are: '$show'\");</script>";
}
//END CODE 3

//CODE 4
$hobby = $_POST['hobi'];
$selected_hobby = "";
foreach ($hobby as $hobi) 
{
  $selected_hobby .= $hobi . ", ";
}
$selected_hobby = substr($selected_hobby, 0, -2);


echo"$selected_hobby";
//END CODE 4

?>