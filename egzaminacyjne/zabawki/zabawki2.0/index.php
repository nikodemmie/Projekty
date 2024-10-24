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

        $ins1 = "insert into zabawki(rodzaj,cena,ilosc) values('lego', 499.99, 40)";
        $ins2 = "insert into zabawki(rodzaj,cena,ilosc) values('pluszak', 20, 100)";
        $ins3 = "insert into zabawki(rodzaj,cena,ilosc) values('autko', 5, 69)";
        $ins4 = "insert into zabawki(rodzaj,cena,ilosc) values('pitolecik', 200, 20)";
        $ins5 = "insert into zabawki(rodzaj,cena,ilosc) values('pilka', 20.99, 60)";
        // mysqli_query($con , $ins1);
        // mysqli_query($con , $ins2);
        // mysqli_query($con , $ins3);
        // mysqli_query($con , $ins4);
        // mysqli_query($con , $ins5);

        $ins6 ="INSERT INTO sprzedaz(klient) values
        ('Kapitan Bomba'),
        ('Domino Diabelski'),
        ('Marcinek'),
        ('Ryszard Kabura'),
        ('Bogdan Boner')
        ";
        // mysqli_query($con , $ins6);


        $tabela1 = "SELECT * from zabawki";
        $tabela2 = "SELECT * from sprzedaz";

        $wyn_tabela1=mysqli_query($con, $tabela1);
        $wyn_tabela2=mysqli_query($con, $tabela2);
        echo "<table><tr id='first-row'><td>LP</td><td>RODZAJ</td><td>CENA</td><td>ILOSC</td></tr>";
        while( $row=mysqli_fetch_array($wyn_tabela1))
        {
            
            echo "<tr><th>".$row["lp"]."</th> "."<td>".$row["rodzaj"]."</td>"."<td>".$row["cena"]."</td> "."<td>".$row["ilosc"]."</td></tr>";
          
        }
        echo "</table>";
        

        $klienci = "SELECT lp, klient from sprzedaz";
        $wyn_klienci=mysqli_query($con, $klienci);

        echo "<br><br><form method='post' action='index.php' id='main'><select name='klient' id='klient-select'>";

            while( $row=mysqli_fetch_array($wyn_klienci))
            {
                
                echo "
                <option value='".$row["lp"]."'>".$row["klient"]."</option>
                ";
            
            }


         echo "</select><div id='ilosc'><label for='inp' class='label-ilosc'>Wprowadz ilosc:<br></label><input type='number' min='0' id='inp' placeholder='ilosc' name='ilosc'></div><input type='submit' id='submit' value='potwierdz'>
        </form>";

        echo "<table><tr id='first-row'><td>LP</td><td>KLIENT</td><td>ILOSC</td></tr>";

        while( $row=mysqli_fetch_array($wyn_tabela2))
        {
            
            echo "<tr><th>".$row["lp"]."</th> "."<td>".$row["klient"]."</td>"."<td>".$row["ilosc"]."</td>";
          
        }
        echo "</table>";

        $kli = "";
        $ilo = 0;
        @$kli = $_POST["klient"];
        @$ilo = $_POST["ilosc"];



            if(isset($kli))
            {
                $up = "UPDATE sprzedaz set ilosc='".$ilo."' WHERE lp=".$kli.";";
                mysqli_query($con, $up);
                header("Refresh:0");
            }



        $kwerenda1 = mysqli_query($con, "SELECT * from zabawki order by ilosc DESC limit 1"); //najwieksza ilosc
        $kwerenda2 = mysqli_query($con, "SELECT * from zabawki order by ilosc ASC limit 1"); //najmniejsza ilosc
        $kwerenda3 = mysqli_query($con, "SELECT * from zabawki order by cena ASC limit 1"); //najtansze 
        $kwerenda4 = mysqli_query($con, "SELECT * from zabawki order by cena DESC limit 1"); //najdrozsze
        $kwerenda5 = mysqli_query($con, "SELECT count(lp) from zabawki"); //liczba zabawek




        while( $row=mysqli_fetch_array($kwerenda1))
        {
            
            echo "<br>Zabawka której jest najwięcej:&ensp;".$row["rodzaj"]."&emsp;&emsp;Ilość: ".$row["ilosc"];
          
        }
        while( $row=mysqli_fetch_array($kwerenda2))
        {
            
            echo "<br>Zabawka której jest najwięcej:&ensp;".$row["rodzaj"]."&emsp;&emsp;Ilość: ".$row["ilosc"];
          
        }
        while( $row=mysqli_fetch_array($kwerenda3))
        {
            
            echo "<br>Zabawka która jest najtańsza:&ensp;".$row["rodzaj"]."&emsp;&emsp;Cena: ".$row["cena"];
          
        }
        while( $row=mysqli_fetch_array($kwerenda4))
        {
            
            echo "<br>Zabawka która jest najdroższa:&ensp;".$row["rodzaj"]."&emsp;&emsp;Cena: ".$row["cena"];
          
        }
        while( $row=mysqli_fetch_array($kwerenda5))
        {
            
            echo "<br>Ile łącznie jest zabawek:&ensp;".$row["count(lp)"];
          
        }
        


     ?>
     <style>
        table{
            border: 1px solid black;
            text-align: center;
            border-collapse: collapse;
        }
        td{
            padding: 0.5rem;
        }
        th{       
            background-color: #36c;
            color: #fff;
            text-align: left;
        }
        tr:nth-child(odd){
            background-color: #fff;
        }
        tr:nth-child(even){
            background-color: #eee;
        }
        #main{
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        #first-row{
            font-family: lato;
            background-color: #333;
            color: white;
        }
        #ilosc{
            display: flex;
            flex-direction: column;
            margin: 10px;
        }
        #inp{
            border: none;
            border-bottom: 1.4px solid black;
            width: 150px;
            height: 25px;

        }
        #inp:focus{

            outline: none;
            border-bottom: 1.4px solid blue;
        }
        #inp:hover{
            background-color: rgba(52, 155, 235, 0.1);

        }
        #klient-select{
            padding: 2px;
            text-align: center;
            border-radius: 10px;
        }
        #submit{
            border-radius: 7px;
            padding: 3px;
            margin: 5px;
            background: #B9DFFF;
            height: 25px;
            width: 100px;
            border: none;
            box-shadow: 2px 2px 5px 1px lightgray;

        }
        #submit:hover{
            position: relative;
            top: -1px;
            background: #2483ff;   
            box-shadow: 2px 2px 5px 5px lightgray;
            
        }
        &::placeholder{
            color: transparent;

        }
        &:placeholder-shown ~ .label-ilosc{
            top:20px;
            cursor: text;
            font-size: 1.3rem;
        }

     </style>
</body>
</html>