<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$servername = "localhost"; // A szerver neve (általában localhost, de ellenőrizd a szerver beállításait)
$username = "root"; // A MySQL felhasználóneved
$password = ""; // A MySQL jelszavad
$dbname = "teliolimpia2018"; // Az adatbázis neve, amit létrehoztál

// Kapcsolódás létrehozása
$conn = new mysqli($servername, $username, $password, $dbname);

// Kapcsolódás ellenőrzése
if ($conn->connect_error) {
die("Kapcsolódási hiba: " . $conn->connect_error);
}
?>
<?php
INSERT INTO eremszerzok (orszag, arany, ezust, bronz) VALUES
('Ausztria', 5, 3, 6),
('Dél-Korea', 5, 8, 4),
('Egyesült Államok', 9, 8, 10),
('Franciország', 5,4,6),
('Hollandia' , 8,6,6,),
('Kanada', 11, 8 ,10),
('Magyarország', 1, 0,0),
('Németország', 14, 10, 4),
('Norvégia', 14, 14, 11),
('Svájc', 5,6,4),
('Svédország', 7,6,1),
?>
Phjongcshang,Public domain, via WikimediaCommonsA
2018. évi téli olimpiai játékok, hivatalos nevéna  XXIII.  téli  olimpiai  játékok  egy  több  sportotmagába  foglaló  nemzetközi  sportesemény  volt,amit  2018.  f
ebruár  9.  és  február  25.  közöttrendeztek     a     dél-koreai     Phjongcshangban.Magyarország   a   dél-koreai   Phjongcshangbanmegrendezett   2018.   évi   téli   olimpiai   játékokegyik  részt  vevő  nemzete  volt.
Az  országot  azolimpián  6  sportágban  19  sportoló  képviselte,akik összesen 1 érmet szereztek. Magyarországa   téli   olimpiák   történetében   először   nyertaranyérmet.
</body>
</html>