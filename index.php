<?php

$motorcycle[0]['year'] = 1989;
$motorcycle[0]['type'] = "Indian-Chief";
$motorcycle[0]['color'] = "Deep-Black";
$motorcycle[0]['condition'] = "New";

$motorcycle[1]['year'] = 2020;
$motorcycle[1]['type'] = "KTM-DukeGT";
$motorcycle[1]['color'] = "Oragne-Black";
$motorcycle[1]['condition'] = "brand new";

$motorcycle[2]['year'] = 2001;
$motorcycle[2]['type'] = "KTM-Adventure";
$motorcycle[2]['color'] = "Orange";
$motorcycle[2]['condition'] = "preserved";

$motorcycle[3]['year'] = 1955;
$motorcycle[3]['type'] = "Jawa-Mustang";
$motorcycle[3]['color'] = "Dark-Red";
$motorcycle[3]['condition'] = "new";

$motorcycle[4]['year'] = 2005;
$motorcycle[4]['type'] = "Ducati-Panigale";
$motorcycle[4]['color'] = "Product-Red";
$motorcycle[4]['condition'] = "used";

$motorcycle[5]['year'] = 2015;
$motorcycle[5]['type'] = "KTM-RC-125";
$motorcycle[5]['color'] = "Pure-Black";
$motorcycle[5]['condition'] = "preserved";
//______________________________________
$person[0]['firstname'] = "Michal";
$person[0]['lastname'] = "Plaček";
$person[0]['age'] = 17;
$person[0]['weight'] = 70;
$person[0]['height'] = 182;
$person[0]['motorcycle'] = $motorcycle[5];

$person[1]['firstname'] = "Jan";
$person[1]['lastname'] = "Šlechta";
$person[1]['age'] = 16;
$person[1]['weight'] = 65;
$person[1]['height'] = 174;
$person[1]['motorcycle'] = $motorcycle[1];

$person[2]['firstname'] = "Jakub";
$person[2]['lastname'] = "Vávrů";
$person[2]['age'] = 17;
$person[2]['weight'] = 85;
$person[2]['height'] = 169;
$person[2]['motorcycle'] = $motorcycle[3];

$person[3]['firstname'] = "Štěpán";
$person[3]['lastname'] = "Kolarovský";
$person[3]['age'] = 16;
$person[3]['weight'] = 150;
$person[3]['height'] = 180;
$person[3]['motorcycle'] = $motorcycle[4];

$person[4]['firstname'] = "Martin";
$person[4]['lastname'] = "Kokeš";
$person[4]['age'] = 26;
$person[4]['weight'] = 80;
$person[4]['height'] = 180;
$person[4]['motorcycle'] = $motorcycle[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
for ($i=0; $i < 5; $i++) { 
    echo $person[$i]['firstname'] . " " . $person[$i]['motorcycle']['year'] . " " . $person[$i]['motorcycle']['type'] . " " . $person[$i]['motorcycle']['color'] . " " . $person[$i]['motorcycle']['condition'];
    ?> <br>
    <?php
}
?>
</body>
</html>