<?php

include("config.php");

$insert_query = "INSERT INTO tblstudent VALUES ('$_POST[stuID]','$_POST[stuFNAME]','$_POST[stuLNAME]','$_POST[stuEMAIL]')";

mysqli_query($db, $insert_query);

header("location: index.php");

?>

