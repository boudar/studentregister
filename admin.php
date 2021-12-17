<?php
include("header.php");
// session_start();
//     if(!isset($_SESSION["username"])) {
//         header("Location: login.php");
//         exit();
//     }
?>

<table align="left" hieght="50px">
    <th>Id</th><th>Name</th><th>Email Adress</th><th>Birthday</th>
 <?php
 
 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "school";

 $conn = mysqli_connect($host,$username,$password,$dbname);

 $query = "SELECT * FROM students";
 $result = mysqli_query($conn,$query);

 if ($result){
     while($row = mysqli_fetch_assoc($result)){
         echo "<tr><td>".$row['id'] . "</td><td>".$row['name'] . "</td><td>". $row['email']. "</td><td>". $row['bidate']; 
     }
 }

 ?>
 </table>
 <table border="1" align="center">
     <tr>
 <form action="#" method="POST">
 <td> enter id to delete:<br><input type="number" name="idde"></td>
 <td><input type="submit" value="Delete" name="delete"></td></tr>
</form>
</table>
<?php
 error_reporting(0);
 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "school";

 $conn = mysqli_connect($host,$username,$password,$dbname);

 $ide = $_POST['idde'];
 $delete = $_POST['delete'];

 if (isset($delete)) {
    $query = "DELETE FROM students WHERE id = $ide";
    $result = mysqli_query($conn,$query);
    echo "<center><h3 style='color:green'>" . "User Deleted Succesfully" . "<h3><center>";
    header("Refresh:1");
 }
 
 ?>

