<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   

        <style>
    /* General styling */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 20px;
        background: #DEDEDE; 
        color: #333; 
    }

    h1 {
        color: black; /* Royal blue for headings */
        text-align: center;
        margin-bottom: 30px;

    }

    p {
        text-align: left;
        position: absolute;
        font-size: 25px; /* Smaller font size for consistency */
    }

    form {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 30px;
    }
    a{
        margin-top: 4px;
    }

    select {
        width: 150px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 5px;
        background: #FFF; 
        color: #333; 
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        padding: 10px 15px;
        transition: background-color 0.3s ease;
        font-weight: bold; 
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    
    table {
        width: 100%;
        border-collapse: separate;
        margin-top: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        background-color: #FFF; 
        color: #333; 
    }

    th {
        background-color: #f2f2f2; 
    }

    tr:nth-child(even) {
        background-color: #f9f9f9; 
    }

    form[action="rezerw.php"] {
        display: inline-block;
    }

    form[action="rezerw.php"] input[type="submit"] {
        background-color: #ff6347;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        padding: 5px 10px;
        transition: background-color 0.3s ease;
        font-weight: bold; 
    }

    form[action="rezerw.php"] input[type="submit"]:hover {
        background-color: #cc0000;
    }
</style>

</head>
<body>
    <h1>Witaj na stronie kina</h1>
    <p>Repertuar: </p>
   
    
    <?php
    session_start();
    $lo = 'localhost';
    $user = 'root';
    $password = '';
    $con = mysqli_connect($lo,$user,$password) or die("Nie połączono");
        
    $base = "Create Database IF NOT EXISTS Kino2";
    mysqli_query($con, $base);
    mysqli_select_db($con,'Kino2');
    $filmy = "Create table IF NOT EXISTS filmy(
        id_f int auto_increment not null,
        nazwa_filmu text not null,
        rok_produkcji int not null,
        rodzaj text not null,
        primary key(id_f));";
    $emisja = "Create table IF NOT EXISTS emisja(
        id_e int auto_increment not null,
        data date not null,
        lokacja text not null,
        godzina int(4),
        id_f int not null,
        primary key(id_e),
        foreign key(id_f) references filmy(id_f));";
    $rezerwacja = "Create table IF NOT EXISTS rezerwacja(
        id_r int auto_increment not null,
        rzad varchar(1) not null,
        miejsce varchar(1) not null,
        id_e int not null,
        primary key(id_r),
        foreign key(id_e) references emisja(id_e));";
    mysqli_query($con, $filmy);
    mysqli_query($con, $emisja);
    mysqli_query($con, $rezerwacja);
    $insert1 = "insert into filmy(nazwa_filmu, rok_produkcji, rodzaj) values ('Aquaman',2018,'Akcja')";
    $insert2 = "insert into filmy(nazwa_filmu, rok_produkcji, rodzaj) values ('Jestem Legendą',2007,'Horror')";
    $insert3 = "insert into filmy(nazwa_filmu, rok_produkcji, rodzaj) values ('Epoka Lodowcowa',2007,'Przygodowy')";
    $insert4 = "insert into filmy(nazwa_filmu, rok_produkcji, rodzaj) values ('Matrix',1999,'SciFi')";
    $insert5 = "insert into filmy(nazwa_filmu, rok_produkcji, rodzaj) values ('Avatar',2009,'SciFi')";
    
    $inserte = "insert into emisja(data, lokacja, godzina, id_f) values ('2024-06-10', 'gdynia', 1930 , 1)";
    $inserte2 = "insert into emisja(data, lokacja, godzina, id_f) values ('2024-06-11', 'gdynia', '2000', 3)";

    $inserte3 = "insert into emisja(data, lokacja, godzina, id_f) values ('2024-06-12', 'gdynia', '1800', 2)";
    $inserte4 = "insert into emisja(data, lokacja, godzina, id_f) values ('2024-06-10', 'gdynia', '1930', 4)";
    $inserte5 = "insert into emisja(data, lokacja, godzina, id_f) values ('2024-06-11', 'gdynia', '2000', 1)";

    $inserte2 = "insert into emisja(data, lokacja, godzina, id_f) values ('2024-06-14', 'gdynia', '1500', 3)";
    // mysqli_query($con, $insert1);
    // mysqli_query($con, $insert2);
    // mysqli_query($con, $insert3);
    // mysqli_query($con, $insert4);
    // mysqli_query($con, $insert5);
    // mysqli_query($con, $inserte);
    // mysqli_query($con, $inserte2);
    // mysqli_query($con, $inserte3);
    // mysqli_query($con, $inserte4);
    // mysqli_query($con, $inserte5);
    
    echo ' <form action="" method="post" id="input_form">
        <a>Wybierz gatunek filmu:</a><select name="gatunek">
                                    <option value="Wszystkie" default="Wszystkie">wszystkie</option>
                                    <option value="Akcja">Akcja</option>
                                    <option value="Horror">Horror</option>
                                    <option value="SciFi">Sci-Fi</option>
                                    <option value="Przygodowy">Przygodowy</option></select>
                                    ';
    echo '<a>Wybierz godzine seansu:</a> <select id="godz" name="data">';
    $godz = "Select data, godzina from emisja ";
    $wynik2 = mysqli_query($con, $godz);
    $num = 0;
        
    while ( $row = mysqli_fetch_array($wynik2))
    {
        $n=$row["godzina"];        
        
        $first = substr($n, 0, 2);
        $sec = substr($n, 2, 2);

        echo "<option value='".$row["data"].$row["godzina"]."'>".$row["data"]." ".$first.":".$sec."</option>";
        $num++;
    }
    echo '</select><input type="submit" value="Wyślij">    
    </form>';
    @$gatunek = $_POST['gatunek'];
    @$data = $_POST['data'];
    
    $dzien = substr($data, 0, 10);
    $godzina = substr($data, 10, 4);
    $_SESSION['dzien'] = $dzien;
    $_SESSION['godzina'] = $godzina;

    if($gatunek == "Wszystkie")
    {
        

        $result = $con->query("SELECT nazwa_filmu, rok_produkcji,rodzaj, filmy.id_f FROM filmy INNER JOIN emisja ON filmy.id_f=emisja.id_f where emisja.godzina = '".$godzina."' and emisja.data = '".$dzien."';");
        echo '<table><tr>
          <th>Nazwa</th>
          <th>Rok Produkcji</th>
          <th>Rodzaj</th>
        </tr>';
        while( $row = $result->fetch_row()) {
          vprintf('<tr><td>%s</td><td>%s</td><td>%s</td>
                <td><form action="rezerw.php" method="post">
                <input type="hidden" name="id_f" value="%s">
                ', $row);
                
                
                echo '</select><input type="submit" id="rez" name="s" value="Rezerwuj miejsce"></form></td></tr>';
                
        }
        
        echo '</table>';
        
    }
    else
    {
        


        $result = $con->query("SELECT nazwa_filmu, rok_produkcji,rodzaj, filmy.id_f FROM filmy INNER JOIN emisja ON filmy.id_f=emisja.id_f where emisja.godzina = '".$godzina."' and emisja.data = '".$dzien."' and filmy.rodzaj='".$gatunek."'");
        echo '<table><tr>
          <th>Nazwa</th>
          <th>Rok Produkcji</th>
          <th>Rodzaj</th>
        </tr>';
        while( $row = $result->fetch_row()) {
          vprintf('<tr><td>%s</td><td>%s</td><td>%s</td>
                <td><form action="rezerw.php" method="post">
                <input type="hidden" name="id_f" value="%s">
                <input type="submit" name="s" value="Rezerwuj miejsce">
                </form></td>
                </tr>', $row);
        }
        echo '</table>';
            
    }
    
    
  
    ?>
    

</body>
</html>