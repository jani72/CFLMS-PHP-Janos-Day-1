<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="utf-8" />
    <title>PHP</title>
</head>
<body>

<?php

$Kursteilnehmer = array("Patrick","Ahmed","Sanja","Andreas","Bruno","Hans-Jürgen","Samson","Gloria","Kathi","Elke");
echo "Foreach-Loop: <br>";
foreach( $Kursteilnehmer as  $name )
{
echo $name. "<br/>";
}

?>

</body>
</html>