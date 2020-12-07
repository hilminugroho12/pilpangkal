<?php
    $host = "localhost";// "sql313.epizy.com";//
    $user = "root";//"epiz_26770241"; //
    $psw = "";//"fvnCbNffge"; //
    $db_name= "db_pilpangkal";//"epiz_26770241_J3C118154"; //
    $kon = mysqli_connect($host,$user,$psw,$db_name);

    if (!$kon){
        die ('gagal terhubung dengan database:'.mysqli_connect_error());
    }
?>