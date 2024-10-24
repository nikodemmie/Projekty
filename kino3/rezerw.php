<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    session_start();
    ?>
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
    p{
        text-align: center;
    }
        #option{
            background: red;
        }
  
        div{
            display: inline-block;
            width: 50px;
            height: 50px;
            background: lightskyblue;
            margin: 5px;
            border-radius: 20px;
            
        }
        #dostepne{
            background: lightskyblue;
            width: 20px;
            height: 20px;
            border-radius: 7px;
        }
        #zajete{
            background: grey;
            width: 20px;
            height: 20px;
            border-radius: 7px;
        }
        #wybrane{
            background: red;
            width: 20px;
            height: 20px;
            border-radius: 7px;
        }        
        table{
            
            text-align: left;
            display:inline;
            width: 200px;
            height: 40px;
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
    #back{
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        padding: 5px 10px;

    }
    a:link { 
  text-decoration: none; 
} 
    #ekran{
        background-color: black;
        height: 5px;
        width: 500px;
    }
    #ramka{  
        width: 40%;
        border-collapse: separate;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        height: 100%;
        background-color: whitesmoke;
    }
    hr{
        width: 90%;
        
    }
    #main{
        width: 40%;
        border-collapse: separate;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        height: 100%;
        background-color: whitesmoke;
    }
    
        </style>
        
        <script>
         
            var jj = 0;
            var jd = 0;
            var jt = 0;
            var jc = 0;
            var jp = 0;
            var dj =0, dd=0, dt=0, dc=0, dp = 0;
            var tj=0, td=0, tt=0, tc=0, tp = 0;
            var cj=0, cd=0, ct=0, cc=0, cp = 0;

            function jj_f(){
                if(jj==0)
                {
                    jj=1;
                    document.getElementById("sjj").style.background = 'red';  
       
                }
                else if(jj==1){
                    document.getElementById("sjj").style.background = 'lightskyblue';
                    jj=0;  
                }
                                        
            }
            function jd_f(){
                if(jd==0)
                {
                    jd=1;
                    document.getElementById("sjd").style.background = 'red';            
                }
                else if(jd==1){
                    document.getElementById("sjd").style.background = 'lightskyblue';
                jd=0;  
                }                             
            }
            function jt_f(){
                if(jt==0)
                {
                    jt=1;
                    document.getElementById("sjt").style.background = 'red';            
                }
                else if(jt==1){
                    document.getElementById("sjt").style.background = 'lightskyblue';
                jt=0;  
                }                             
            }
            function jc_f(){
                if(jc==0)
                {
                    jc=1;
                    document.getElementById("sjc").style.background = 'red';            
                }
                else if(jc==1){
                    document.getElementById("sjc").style.background = 'lightskyblue';
                jc=0;  
                }                             
            }
            function jp_f(){
                if(jp==0)
                {
                    jp=1;
                    document.getElementById("sjp").style.background = 'red';            
                }
                else if(jp==1){
                    document.getElementById("sjp").style.background = 'lightskyblue';
                jp=0;  
                }                             
            }
            function dj_f(){
                if(dj==0)
                {
                    dj=1;
                    document.getElementById("sdj").style.background = 'red';            
                }
                else if(dj==1){
                    document.getElementById("sdj").style.background = 'lightskyblue';
                dj=0;  
                }                             
            }
            function dd_f(){
                if(dd==0)
                {
                    dd=1;
                    document.getElementById("sdd").style.background = 'red';            
                }
                else if(dd==1){
                    document.getElementById("sdd").style.background = 'lightskyblue';
                dd=0;  
                }                             
            }
            function dt_f(){
                if(dt==0)
                {
                    dt=1;
                    document.getElementById("sdt").style.background = 'red';            
                }
                else if(dt==1){
                    document.getElementById("sdt").style.background = 'lightskyblue';
                dt=0;  
                }                             
            }
            function dc_f(){
                if(dc==0)
                {
                    dc=1;
                    document.getElementById("sdc").style.background = 'red';            
                }
                else if(dc==1){
                    document.getElementById("sdc").style.background = 'lightskyblue';
                dc=0;  
                }                             
            }
            function dp_f(){
                if(dp==0)
                {
                    dp=1;
                    document.getElementById("sdp").style.background = 'red';            
                }
                else if(dp==1){
                    document.getElementById("sdp").style.background = 'lightskyblue';
                dp=0;  
                }                             
            }
            function tj_f(){
                if(tj==0)
                {
                    tj=1;
                    document.getElementById("stj").style.background = 'red';            
                }
                else if(tj==1){
                    document.getElementById("stj").style.background = 'lightskyblue';
                tj=0;  
                }                             
            }
            function td_f(){
                if(td==0)
                {
                    td=1;
                    document.getElementById("std").style.background = 'red';            
                }
                else if(td==1){
                    document.getElementById("std").style.background = 'lightskyblue';
                td=0;  
                }                             
            }
            function tt_f(){
                if(tt==0)
                {
                    tt=1;
                    document.getElementById("stt").style.background = 'red';            
                }
                else if(tt==1){
                    document.getElementById("stt").style.background = 'lightskyblue';
                tt=0;  
                }                             
            }
            function tc_f(){
                if(tc==0)
                {
                    tc=1;
                    document.getElementById("stc").style.background = 'red';            
                }
                else if(tc==1){
                    document.getElementById("stc").style.background = 'lightskyblue';
                tc=0;  
                }                             
            }
            function tp_f(){
                if(tp==0)
                {
                    tp=1;
                    document.getElementById("stp").style.background = 'red';            
                }
                else if(tp==1){
                    document.getElementById("stp").style.background = 'lightskyblue';
                tp=0;  
                }                             
            }
            function cj_f(){
                if(cj==0)
                {
                    cj=1;
                    document.getElementById("scj").style.background = 'red';            
                }
                else if(cj==1){
                    document.getElementById("scj").style.background = 'lightskyblue';
                cj=0;  
                }                             
            }
            function cd_f(){
                if(cd==0)
                {
                    cd=1;
                    document.getElementById("scd").style.background = 'red';            
                }
                else if(cd==1){
                    document.getElementById("scd").style.background = 'lightskyblue';
                cd=0;  
                }                             
            }
            function ct_f(){
                if(ct==0)
                {
                    ct=1;
                    document.getElementById("sct").style.background = 'red';            
                }
                else if(ct==1){
                    document.getElementById("sct").style.background = 'lightskyblue';
                ct=0;  
                }                             
            }
            function cc_f(){
                if(cc==0)
                {
                    cc=1;
                    document.getElementById("scc").style.background = 'red';            
                }
                else if(cc==1){
                    document.getElementById("scc").style.background = 'lightskyblue';
                cc=0;  
                }                             
            }
            function cp_f(){
                if(cp==0)
                {
                    cp=1;
                    document.getElementById("scp").style.background = 'red';            
                }
                else if(cp==1){
                    document.getElementById("scp").style.background = 'lightskyblue';
                cp=0;  
                }                             
            }
            function rezerwuj(){
                var rezerw= [];
                if(jj==1)
                    rezerw.push('jj');
                if(jd==1)
                    rezerw.push('jd');  
                if(jt==1)
                    rezerw.push('jt');
                if(jc==1)
                    rezerw.push('jc');
                if(jp==1)
                    rezerw.push('jp');
                if(dj==1)
                    rezerw.push('dj');
                if(dd==1)
                    rezerw.push('dd');  
                if(dt==1)
                    rezerw.push('dt');
                if(dc==1)
                    rezerw.push('dc');
                if(dp==1)
                    rezerw.push('dp'); 
                if(tj==1)
                    rezerw.push('tj');
                if(td==1)
                    rezerw.push('td');  
                if(tt==1)
                    rezerw.push('tt');
                if(tc==1)
                    rezerw.push('tc');
                if(tp==1)
                    rezerw.push('tp');
                if(cj==1)
                    rezerw.push('cj');
                if(cd==1)
                    rezerw.push('cd');  
                if(ct==1)
                    rezerw.push('ct');
                if(cc==1)
                    rezerw.push('cc');
                if(cp==1)
                    rezerw.push('cp');  

                               
                let text2 = rezerw.toString();             
                document.getElementById("guzik").value = text2; 
               
            }
            
            
        </script>
</head>

<body>
    
    
    <?php 
    
    
        $lo = 'localhost';
        $user = 'root';
        $password = '';
        $con = mysqli_connect($lo,$user,$password,"Kino2") or die("Nie połączono");
        
        $wartosc =$_POST['id_f'];
        $_SESSION["film"] = $wartosc;
       
        $em = "Select id_e from emisja where emisja.id_f='".$wartosc."' AND emisja.data='".$_SESSION['dzien']."' AND emisja.godzina='".$_SESSION['godzina']."'";
        $emwynik = mysqli_query($con, $em);
        while($row = mysqli_fetch_array($emwynik))
        {
            $wynik_row = $row["id_e"];
            $_SESSION['ide'] = $wynik_row;
            
        }
        $zajete = "Select rzad, miejsce from rezerwacja where id_e='".$_SESSION['ide']."'";
        $wzajete = mysqli_query($con, $zajete);
        $rezerwacja = [];
        $i = 0;
        while($row2 = mysqli_fetch_array($wzajete))
        {       
            $rezerwacja[$i] = $row2["rzad"].$row2['miejsce'];
            $i++;
           
        }
        for($j = 0; $j<count($rezerwacja);$j++)
        {
            echo "<style>#s".$rezerwacja[$j]."{background: grey;}</style>"; 
            echo "<script>".$rezerwacja[$j]."=2;</script>";
        }
       
       
        $film = "Select * from filmy where id_f='".$wartosc."'";
        $wynik = mysqli_query($con, $film);
        while ( $row = mysqli_fetch_array($wynik))
        {
            echo "<center><div id='main'><h1>Rezerwacje</h1><hr><h4>Nazwa: ".$row["nazwa_filmu"]."&emsp;&emsp;"."Rok produkcji: ".$row["rok_produkcji"]."&emsp;&emsp;"."Rodzaj: ".$row["rodzaj"]."</h4></div></center><br>";
        }
        
       
        
    
        
        
    ?><center>
        <div id="ramka">
        <table id="legend">
            <b>Legenda</b><br>
       <tr><td><div id="dostepne"></div> </td><td><a id="dost"> - Wolne</a></td>
    
        
        <td><div id="zajete"></div> </td><td><a id="zaj"> - Zajęte</a></td>
        <td><div id="wybrane"></div></td><td><a id="wybr"> - Wybrane</a></td></tr>
        
    </table><hr>
    <br><div id="ekran"></div><br>EKRAN
<p>
    <div id="sjj" class="kanapy" onclick="jj_f()"></div>
    <div id="sjd" class="kanapy" onclick="jd_f()"></div>
    <div id="sjt" class="kanapy" onclick="jt_f()"></div>
    <div id="sjc" class="kanapy" onclick="jc_f()"></div>
    <div id="sjp" class="kanapy" onclick="jp_f()"></div><br>
    <div id="sdj" class="kanapy" onclick="dj_f()"></div>
    <div id="sdd" class="kanapy" onclick="dd_f()"></div>
    <div id="sdt" class="kanapy" onclick="dt_f()"></div>
    <div id="sdc" class="kanapy" onclick="dc_f()"></div>
    <div id="sdp" class="kanapy" onclick="dp_f()"></div><br>
    <div id="stj" class="kanapy" onclick="tj_f()"></div>
    <div id="std" class="kanapy" onclick="td_f()"></div>
    <div id="stt" class="kanapy" onclick="tt_f()"></div>
    <div id="stc" class="kanapy" onclick="tc_f()"></div>
    <div id="stp" class="kanapy" onclick="tp_f()"></div><br>
    <div id="scj" class="kanapy" onclick="cj_f()"></div>
    <div id="scd" class="kanapy" onclick="cd_f()"></div>
    <div id="sct" class="kanapy" onclick="ct_f()"></div>
    <div id="scc" class="kanapy" onclick="cc_f()"></div>
    <div id="scp" class="kanapy" onclick="cp_f()"></div><Br></p>
    


    <br><form action="koniec.php" method="post" id="input_form"><input type="hidden" name="przy" id="guzik">
    <input type="submit" onclick="rezerwuj()"  value="Zarezerwuj" id="submit" name="button1"><br><Br><a id="back" href="index.php">Powrót</a><br><br><Br></input></form>
    
    
    </div>
    </center>
</body>
</html>