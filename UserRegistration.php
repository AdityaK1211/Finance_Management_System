<?php
include('DBConnection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$name=$fname." ".$lname;
$email=$_POST['email'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$Country=$_POST['Country'];
$State=$_POST['State'];
$City=$_POST['City'];
$uname=$_POST['name'];
$pass=$_POST['password'];

$query="INSERT INTO `user`(`Name`, `Age`, `PhoneNo`, `Gender`, `DOB`, `Country`, `State`, `City`, `Username`, `Password`, `Email`) VALUES ('$name','$age','$phone','$gender','$dob','$Country','$State','$City','$uname','$pass','$email')";
$run= mysqli_query($con,$query);

if($run === TRUE)
{
    ?>
    <script>
     alert('Registration Successful!');
     window.location.href="index.html";
    </script>
    <?php
}
else
{
    ?>
    <script>
     alert('Registration UnSuccessful!');
    </script>
    <?php
}
?>