<!-- 
    Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 
-->

<!-- <?php
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
</html> -->




<!-- 
    Snack 2
Con un form passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
altrimenti “Accesso negato”
-->

<!-- <?php

$name = $_GET['name'];
$age = $_GET['age'];
$mail = $_GET['mail'];

if(strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".") && is_numeric($age)){
    echo "Accesso riuscito";
}else{
    echo "Accesso negato";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="GET">
        <h1>Login</h1>
        <input type="text" name="name" placeholder="name">
        <input type="text" name="age" placeholder="age">
        <input type="mail" name="mail" placeholder="mail">
        <button type="submit">invia</button>
        <button type="reset">reset</button>
    </form>
</body>
</html> -->



<!-- 
    Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. 
-->

<?php
// Array di libri associati a ciascuna data
$libri_per_data = [
    "01-01-2007" => [
        ["titolo" => "Harry Potter e la Pietra Filosofale", "autore" => "J.K. Rowling"],
        ["titolo" => "Il Codice Da Vinci", "autore" => "Dan Brown"]
    ],
    "05-03-2008" => [
        ["titolo" => "La ragazza di Fuoco", "autore" => "Suzanne Collins"],
        ["titolo" => "La solitudine dei numeri primi", "autore" => "Paolo Giordano"]
    ],
    "12-07-2009" => [
        ["titolo" => "La regina dei castelli di carta", "autore" => "Stieg Larsson"],
        ["titolo" => "La ragazza del treno", "autore" => "Paula Hawkins"],
        ["titolo" => "Il signore degli anelli", "autore" => "J.R.R. Tolkien"]
    ]
];

// Stampare ogni data con i relativi libri
foreach ($libri_per_data as $data => $libri) {
    echo "Data: $data<br>";
    echo "Libri:<br>";
    foreach ($libri as $libro) {
        echo "- Titolo: {$libro['titolo']}, Autore: {$libro['autore']}<br>";
    }
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>