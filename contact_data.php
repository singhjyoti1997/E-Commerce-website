<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Email=$_POST['email'];
    $Message=$_POST['message'];
    $sql = "INSERT INTO `contact_details`(`Name`, `Email`,`your_massage`) VALUES ('$Name','$Email','$Message')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Account created successfully')</script>";
        echo "<script>window.open('catlog.php','_self')</script>";
    }
    else
    {
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>