<?php
    $server_machine = "localhost";
    $user = "WADproject";
    $pass = "";
    $DBname = "project";

    $id = array();
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
            $sqlQueery = "INSERT INTO `bookings` (`ID`,`Name_`, `Email`, `Date_`, `Time_`, `Service`) VALUES (NULL,'$name', '$email', '$date', '$time', '$service')";

            if(!mysqli_query($connectionVar,$sqlQueery))
            {
                echo "Query Not Instered!";
            }
            else
            {
                $sqlQuery = "SELECT * FROM bookings";

                $result = mysqli_query($connectionVar,$sqlQuery);

                if(!$result)
                {
                    echo "Coudln't RUN the Query\n";
                }
                else
                {
                    if(mysqli_num_rows($result) == 0)
                    {
                        echo "DataBase is Empty!\n";
                    }
                    else
                    {
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            array_push($id,$row["ID"]);
                        }

                        mysqli_free_result($result);
                    }
                }
                include 'bookconfirm.php';
            }
        }
    }
?>