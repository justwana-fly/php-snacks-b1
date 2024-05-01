<!-- 
    Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 
-->

<?php
$partite = [
    ["Squadra Casa" => "Team A", "Squadra Ospite" => "Team B", "PuntiCasa" => 85, "PuntiOspiti" => 78],
    ["Squadra Casa" => "Team C", "Squadra Ospite" => "Team D", "PuntiCasa" => 92, "PuntiOspiti" => 88],
    ["Squadra Casa" => "Team E", "Squadra Ospite" => "Team F", "PuntiCasa" => 79, "PuntiOspiti" => 84],
    ["Squadra Casa" => "Team G", "Squadra Ospite" => "Team H", "PuntiCasa" => 101, "PuntiOspiti" => 95],
    ["Squadra Casa" => "Team I", "Squadra Ospite" => "Team J", "PuntiCasa" => 88, "PuntiOspiti" => 91],
    ["Squadra Casa" => "Team K", "Squadra Ospite" => "Team L", "PuntiCasa" => 75, "PuntiOspiti" => 80],
    ["Squadra Casa" => "Team M", "Squadra Ospite" => "Team N", "PuntiCasa" => 87, "PuntiOspiti" => 82],
    ["Squadra Casa" => "Team O", "Squadra Ospite" => "Team P", "PuntiCasa" => 95, "PuntiOspiti" => 90],
    ["Squadra Casa" => "Team Q", "Squadra Ospite" => "Team R", "PuntiCasa" => 83, "PuntiOspiti" => 79],
    ["Squadra Casa" => "Team S", "Squadra Ospite" => "Team T", "PuntiCasa" => 96, "PuntiOspiti" => 88]
];

foreach ($partite as $partita){
    echo $partita['Squadra Casa'] . " vs " . $partita["Squadra Ospite"] ." : ". $partita["PuntiCasa"] . " - " . $partita["PuntiOspiti"] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

</body>
</html>