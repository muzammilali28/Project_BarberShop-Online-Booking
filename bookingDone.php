<?php

    $server_machine = "localhost";
    $user = "WADproject";
    $pass = "";
    $DBname = "project";
    
    $id = $_POST["ID"];
    $name = $_POST["NAME"];
    $email = $_POST["EMAIL"];
    $date = $_POST["DATE"];
    $time = $_POST["TIME"];
    $service = $_POST["SERVICE"];

    $connectionVar = mysqli_connect($server_machine,$user,$pass,$DBname);

    if(!$connectionVar)
    {
        echo mysqli_connect_error();
    }
    else
    {
        if(isset($_POST["SUBMIT"]) && !empty($_POST["NAME"]))
        {
            $query = "UPDATE bookings SET `Name_`='$name', `Email`='$email', `Date_`='$date', `Time_`='$time', `Service` ='$service' WHERE ID = $id";

            if(!mysqli_query($connectionVar,$query))
            {
                echo "Query Not Instered!";
            }
            else
            {
                // echo "Updated the record!!";
                header("Location: thankyou.php");
            }
        }
        else if(isset($_POST["CANCEL"]))
        {
            $query = "DELETE FROM bookings WHERE ID = $id";
            
            if(!mysqli_query($connectionVar,$query))
            {
                echo "Query Not Instered!";
            }
            else
            {
                // echo "Deleted the Record!!";
                header("Location: sorry.php");
            }
        }
    }
?>