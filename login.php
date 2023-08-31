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
    $firstName=$_POST['firstName'];
    $lastname=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $date_of_birth=$_POST['birthDate'];
    $phone_number=$_POST['phone'];

    $sql = "INSERT INTO `user_data`(`First name`, `Last name`, `Email`, `Password`, `Date of Birth`, `Enter your phone number`) VALUES ('$firstName','$lastname','$email','$password','$date_of_birth',' $phone_number')";
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