<?php
if(isset($_POST["submit"])) {
    // Collecting data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $status = $_POST["status"];

    // Include the connection file
    include("connection.php");

    // Insert data into the user table
    $sql = "INSERT INTO user (username, password, email, role, status) VALUES ('$username', '$password', '$email', '$role', '$status')";

    $qry = mysqli_query($conn, $sql);          // die(mysqli_error($conn)

    if($qry) {
        echo "Hey buddy, your data has been inserted.\n";
    } else {
        echo "Oops! Something went wrong:\n " . mysqli_error($conn);
    }
}
?>
<!-- now making form -->
<!DOCTYPE html>
<html>
<head>
    <title>Table for CRUD operation</title>
</head>
<body>
    <form method="post" name="login" enctype="multipart/form-data" action="">
        <label>Username</label>
        <input type="text" name="username">
        <br><br>
        <label>Password</label>
        <input type="password" name="password">
        <br><br>
        <label>Email</label>
        <input type="email" name="email">
        <br><br>
        <label>Role</label>
        <input type="radio" name="role" value="admin"> Admin
        <input type="radio" name="role" value="user"> User
        <input type="radio" name="role" value="guest"> Guest
        <br><br>
        <label>Status</label>
        <input type="radio" name="status" value="active"> Active
        <input type="radio" name="status" value="inactive"> Inactive
        <br><br> 
        <input type="submit" name="submit" value="Register">          
        <input type="reset" name="submit" value="Cancel">
    </form>
</body>
</html>
