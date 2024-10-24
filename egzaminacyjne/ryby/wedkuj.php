<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header><h1>Portal dla wędkarzy</h1></header>
    <div id="lewy1"><h3>Ryby zamieszkujące rzeki</h3>
    <ol>
        <!-- skrypt1 -->
        <?php 
            $con = mysqli_connect('localhost','root','') ;
            mysqli_select_db($con, 'wedkowanie');
            $kwe3 = mysqli_query($con,'select nazwa, lowisko.akwen, lowisko.wojewodztwo from ryby inner JOIN lowisko on ryby.id=lowisko.Ryby_id where lowisko.rodzaj = 3;');
            while($row = mysqli_fetch_array($kwe3))
            {
                echo "<li>".$row['nazwa']."pływa w rzece ".$row['akwen'].",".$row['wojewodztwo']."</li>";
            }
        ?>
    </ol>
</div>
    
    <div id="prawy"><img alt="Sum" src="ryba1.jpg"><br>
    <a href="kwerendy.txt">pobierz kwerendy</a></div>
    <div id="lewy2"><h3>Ryby drapieżne naszych wód</h3>
<table>
    <th>L.p.</th><th>Gatunek</th><th>Występowanie</th>
    <!-- skrypt 2 -->
    <?php 
     $con = mysqli_connect('localhost','root','') ;
     mysqli_select_db($con, 'wedkowanie');
     $kwe1 = mysqli_query($con,'SELECT id, nazwa, wystepowanie from ryby where styl_zycia=1;');
        
     while($row = mysqli_fetch_array($kwe1))
     {
         echo "<tr><td>".$row['id']."</td><td>".$row['nazwa']."</td><td>".$row['wystepowanie']."</td></tr>";
     }
     mysqli_close($con);
?>
</table>
</div>
    <footer><p>Stronę wykonał: Nikodem Miedzinski</p></footer>
</body>
</html>