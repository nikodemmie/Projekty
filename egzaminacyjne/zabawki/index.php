<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- baza  zabawkki 2 taele - zabawki( li.porz, rodzaj, cena, ilosc) 5el. - sprzedaz(lp, klient, ilosc) 5 rekordow
     tabele na stronie, przy sprzedazy ilosc z klawiatury nastepnie tworzymy dowolny 5 kwerend -->

     <?php 
     
        $serw = 'localhost';
        $user = 'root';
        $password = '';
        $con = mysqli_connect($serw , $user, $password);

        $baza = 'create database IF NOT EXISTS Zabawki';

        mysqli_query($con, $baza);
        mysqli_select_db($con, "Zabawki");
        $ta_zabawki = "CREATE TABLE IF NOT EXISTS zabawki (
            lp int AUTO_INCREMENT,
            rodzaj text,
            cena float,
            ilosc int,
            primary key(lp)
            );";
        mysqli_query($con, $ta_zabawki);
        $ta_sprzedaz = "CREATE TABLE IF NOT EXISTS sprzedaz (
            lp int AUTO_INCREMENT,
            klient text,
            ilosc int,
            primary key(lp));";
        mysqli_query($con, $ta_sprzedaz);

        $ins1 = "INSERT into zabawki(rodzaj,cena,ilosc) values('lego', 499.99, 40)";
        $ins2 = "INSERT into zabawki(rodzaj,cena,ilosc) values('pluszak', 20, 100)";
        $ins3 = "INSERT into zabawki(rodzaj,cena,ilosc) values('autko', 5, 69)";
        // $ins4 = "INSERT into zabawki(rodzaj,cena,ilosc) values('pitolecik', 200, 20)";
        // $ins5 = "INSERT into zabawki(rodzaj,cena,ilosc) values('pilka', 20.99, 60)";
        mysqli_query($con, $ins1);
        mysqli_query($con, $ins2);
        mysqli_query($con, $ins3);
        mysqli_query($con, $ins4);
        mysqli_query($con, $ins5);

        $ins6 ="INSERT INTO sprzedaz(klient) values
        ('Kapitan Bomba'),
        ('Domino Diabelski'),
        ('Marcinek'),
        ('Ryszard Kabura'),
        ('Bogdan Boner')
        ";
        mysqli_query($con , $ins6);


        // $tabela1 = "SELECT * from zabawki";
        // $tabela2 = "SELECT * from sprzedaz";

        // $wyn_tabela1=mysqli_query($con, $tabela1);
        // $wyn_tabela2=mysqli_query($con, $tabela2);
        // echo "<table><td>LP</td><td>rodzaj</td><td>cena</td><td>ilosc</td>";
        // while( $row=mysqli_fetch_array($wyn_tabela1))
        // {
            
        //     echo "<tr><td>".$row["lp"]."</td> "."<td>".$row["rodzaj"]."</td>"."<td>".$row["cena"]."</td> "."<td>".$row["ilosc"]."</td></tr>";
          
        // }
        // echo "</table>";
        

        // $klienci = "SELECT lp, klient from sprzedaz";
        // $wyn_klienci=mysqli_query($con, $klienci);

        // echo "<br><br><form method='post' action='index.php'><select name='klient'>";

        //     while( $row=mysqli_fetch_array($wyn_klienci))
        //     {
                
        //         echo "
        //         <option value='".$row["lp"]."'>".$row["klient"]."</option>
        //         ";
            
        //     }


        //  echo "</select><a>wprowadz ilosc</a><input type='number' name='ilosc'><input type='submit' value='potwierdz'>
        // </form>";

        // echo "<table><td>LP</td><td>klient</td><td>ilosc</td>";

        // while( $row=mysqli_fetch_array($wyn_tabela2))
        // {
            
        //     echo "<tr><td>".$row["lp"]."</td> "."<td>".$row["klient"]."</td>"."<td>".$row["ilosc"]."</td>";
          
        // }
        // echo "</table>";

        // $kli = "";
        // $ilo = 0;
        // @$kli = $_POST["klient"];
        // @$ilo = $_POST["ilosc"];



        //     if(isset($kli))
        //     {
        //         $up = "UPDATE sprzedaz set ilosc='".$ilo."' WHERE lp='".$kli.";";
        //         mysqli_query($con, $up);
        //     }
     ?>
     <style>
        table, td{
            border: 2px solid black;
        }
     </style>
</body>
</html>