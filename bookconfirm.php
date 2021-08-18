<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmation!</title>
    <link rel="icon" href="./img/WebIcon.PNG">
    <link rel="stylesheet" href="./css/bookingconfirm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Indie+Flower&family=Pacifico&family=Viaoda+Libre&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <img src="./img/logo.png" alt="logo">
        <a href="index.html">Home</a>
        <a href="services.html">Services</a>
    </div>
    
    <div class="confirmBook">
        <h1>Booking Confirmation</h1>
        <form name="myform" action="bookingDone.php" method="POST">
            <div>
                <p>ID<p>
                <input type="text" name="ID" id="write" value="<?php echo $id[sizeof($id)-1];?>" readonly>
            </div>
            <div>
                <p>Name</p>
                <input type="text" name="NAME" id="write" placeholder="e.g Muzammil Ali" value="<?php echo $name;?>">
            </div>
            <div>
                <p>Email</p>
                <input type="text" name="EMAIL" id="write-email" placeholder="e.g muzammilali28@gmail.com" value="<?php echo $email;?>">
            </div>
            <div>
                <p>Date</p>
                <input type="date" name="DATE" id="write" value="<?php echo $date;?>">
            </div>
            <div>
                <p>Time</p>
                <input type="time" name="TIME" id="write" value="<?php echo $time;?>">
            </div>
            <div>
                <p>Service</p>
                <!-- <input type="text" name="SERVICE" id="write-service" required placeholder="e.g Hair Styling"> -->
                <select id="write-service" name="SERVICE" value="<?php echo $service;?>">
                <option value="Hair Triming">Hair Triming</option>
                <option value="Hair Cut">Hair Cut</option>
                <option value="Hair Style">Hair Styling</option>
                <option value="Beard Trim">Beard Triming</option>
                </select>
            </div>
            <br><br>
                <input type="submit" name="SUBMIT" value="CONFIRM BOOKING" id="btnCon">
                <input type="submit" name="CANCEL" value="CANCEL BOOKING" id="btnCan">
        </form>
    </div>

</body>
</html>