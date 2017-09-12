<?php
function namee($lname, $fname = "Ahmad")
{
    return "$fname $lname.<br>";
}
	echo "Berikut ini nama mahasiswa yang mempunyai nama depan Ahmad: <br>";
	echo namee("Zakaria");
	echo namee("Latif");
	echo namee("Fadillah");
?>