<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student management</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="images/school2.png" alt="school-logo">
        </div>
     <div class="form">
     <p>School Management</p>
        <form action="#" method="POST">
            <input type="text" placeholder="Enter your name" name="user">
            <input type="email" placeholder="Enter your Email" name="email">
            <input type="date" name="date"><br>
            <input type="submit" name="send" value="Send">
        </form>
        <?php
        error_reporting(0);
        //Connecting to the Database
         $host = "localhost";
         $username = "root";
         $password = "";
         $dbname = "school";
 
         $conn = mysqli_connect($host,$username,$password,$dbname);
        //send the info to the database
        $sname       = $_POST['user'];
        $semail      = $_POST['email'];
        $sdate       = $_POST['date'];
        $Send        = $_POST['send'];

        if(isset($Send)){
            $query = "INSERT INTO students(name,email,bidate) VALUE('$sname','$semail','$sdate')";
            $result = mysqli_query($conn,$query);
            echo "<h3 style='color:green'>" ."Results Sent" . "<h3>";
            header("Refresh:1");
        }
        ?>
     </div>
    </div>
</body>
</html>