  <?php
$myfile = fopen("(usr).php", "w") or die("Unable to open file!");
$txt = "Username= (usr)";
fwrite($myfile, $txt);
$txt = "Password= (psw)";
fwrite($myfile, $txt);
$txt = "$wabs= (10)"
fwrite($myfile, $txt);
$txt = "SS= (true )"  
fclose($myfile);
?> 
