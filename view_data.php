<?php
    include("dbconnection.php");
    $conn = dbconnection();

    $query = "SELECT id, ssid, bssid FROM wifi_data ";
    $exe = mysqli_query($conn,$query);

    $arr=[];

    while($row=mysqli_fetch_array($exe))
    {
        $arr[] = $row;
    }

    print(json_encode($arr));

?>