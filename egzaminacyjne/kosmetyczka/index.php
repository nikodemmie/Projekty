<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $con= mysqli_connect("localhost","root","");
    mysqli_query($con , "CREATE DATABASE IF NOT EXISTS egzamin1");
    mysqli_select_db($con, "egzamin1");
    mysqli_query($con,"CREATE TABLE IF NOT EXISTS kadra(
    id int,
    imie text,
    nazwisko text,
    stanowisko text,
    primary key(id));
    ");
    mysqli_query($con,"CREATE TABLE IF NOT EXISTS uslugi(
    id int,
    kadra_id int,
    rodzaj int,
    nazwa text,
    cena real,
    primary key(id),
    foreign key(kadra_id) references kadra(id)); ");
    
//     mysqli_query($con,"insert into kadra(id,imie,nazwisko,stanowisko) values (1, 'Anna', 'Karenina', 'fryzjerka'),(2, 'Kasia', 'Figura', 'kosmetyczka'),(3, 'Zosia', 'Kowalska', 'kosmetyczka'),(4, 'Misia', 'Kosińska', 'fryzjerka');");
//     mysqli_query($con, "INSERT INTO uslugi(id, kadra_id, rodzaj, nazwa, cena) values(1, 1, 1, 'Usluga kosmetyczna za 20zl', 20),
// (2, 1, 2, 'Usluga fryzjerska za 30zl', 30),
// (3, 1, 3, 'Usluga inna za 15 zl', 15),
// (4, 1, 1, 'Usluga kosmetyczna za 60 zl', 60);");
    ?>
</body>
</html>