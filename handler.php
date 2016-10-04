<?php 
$handle = fopen("tags.txt", "w");

for ($i=0; $i <19 ; $i++) { 
fwrite($handle, $_POST["tags"][$i]);
fwrite($handle, "\r\n");
header('Location: http://localhost/index.php?success=yes');
}

?>