<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;

        background: #DEDEDE; 
        color: #333; 
    }
    h1 {
        color: black; 
        text-align: center;
        margin-bottom: 30px;

    }
    a:link { 
  text-decoration: none; 
} 
#dalej{
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        padding: 5px 10px;

    }
    div{
        width: 40%;
        
        border-collapse: separate;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        height: 130px;
        background-color: whitesmoke;
    }
    </style>
<body>
    <?php   
    session_start();

    $lo = 'localhost';
    $user = 'root';
    $password = '';
    $con = mysqli_connect($lo,$user,$password,"Kino2") or die("Nie połączono");
    
    $wartosc = $_SESSION["film"];
    $miejsca = 0;
    @$miejsca = $_POST['przy'];
    
    

   
    
        
    
    $miejsca2 = explode(",", $miejsca); // zmienia stringa na tabele
    
      
    if($miejsca == "")
    {
        echo "<center><div><h1>Nie wybrano żadnych miejsc.</h1><a href='index.php' id='dalej'>Koniec</a></div></center>";
    }
    else {
        for($i = 0; $i<count($miejsca2); $i++)
        {
            $m = $miejsca2[$i];
            $fir = substr($m,0,1);
            $sec = substr($m, 1, 1);
            $ins = "insert into rezerwacja(rzad, miejsce, id_e) values ('".$fir."','".$sec."',".$_SESSION['ide'].")";
            mysqli_query($con, $ins);
            
        }
        echo "<center><div><h1>Dziękujemy za rezerwacje</h1><a href='index.php' id='dalej'>Koniec</a></div></center>";
    }
       
    
    
   
    ?>
</body>
</html>