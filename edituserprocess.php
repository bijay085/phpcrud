<!-- edit data -->

<?php
//capturing the data
$id = $_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$city=$_POST['city'];
$message=$_POST['message'];
$status=$_POST['Status'];

//editing data
$sql = "UPDATE inquiry SET firstname='$firstname', lastname='$lastname', email='$email', dob='$dob', gender='$gender', course='$course', city='$city', message='$message', status='$status'
WHERE id='$id'";

include('connection.php');
$qry=mysqli_query($conn, $sql);

if($qry)
{
    header("Location: fetch.php");
}
else
{
    echo "Something wrong";
}

?>
