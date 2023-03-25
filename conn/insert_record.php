<?php
    include("dbconnection.php");
    $conn = dbconnection();

    if(isset($_POST["ssid"]))
    {
        $ssid = $_POST["ssid"];
    }
    else return;
    if(isset($_POST["bssid"]))
    {
        $bssid = $_POST["bssid"];
    }
    else return;
    

    $query = "INSERT INTO wifi_data (ssid, bssid) VALUES ('$ssid', '$bssid')";
    $exe = mysqli_query($conn,$query);

    $arry=[];
    if($exe)
    {
        $arry["success"] = "true";
    }
    else
    {
        $arry["success"] = "false";
    }

    print(json_encode($arry));
?>