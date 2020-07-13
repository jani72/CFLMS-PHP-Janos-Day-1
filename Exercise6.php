<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="utf-8" />
    <title>PHP</title>
</head>
<body>

<?php

$marks = array(
    "Lionel Messi" => array
    (
    "Pace" => 95,
    "Defending" => 100,
    "Passing"  => 90
    ),
    "Ronaldo" =>  array
    (
    "Pace" => 98,
    "Defending" => 93,
    "Passing"  => 100
    ),
    "Lewandovsky" =>  array
    (
    "Pace" => 90 ,
    "Defending" => 95,
    "Passing" => 85
    )
    );
    echo "Marks for Lionel Messi in Pace : ";
    echo $marks[ 'Lionel Messi']['Pace'] . "<br />" ;
    echo "Marks for Ronaldo in Defending : ";
    echo $marks[ 'Ronaldo']['Defending'] . "<br />" ;
    echo "Marks for Lewandovsky in Passing : " ;
    echo $marks['Lewandovsky']['Passing'] .  "<br />";

?>

</body>
</html>