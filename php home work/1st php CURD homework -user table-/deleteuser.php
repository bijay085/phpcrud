<?php 
    $iid=$_GET['iid'];
    $action=$_GET['action'];
    switch($action){
        case "edit":
            {
                $sql = "SELECT * FROM user WHERE id=$iid";
                include('connection.php');
                $qry=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($qry))
                {
                    $id=$row['id'];
                    $username=$row['username'];
                    $password=$row['password'];
                    $email=$row['email'];
                    $role=$row['role'];
                    $status=$row['status'];
                  

                    echo "<form method=post action=edit.php>";
                    echo "<input type=hidden name=id value=$id>";
                    echo "<input type=text name=username value=$username><br>";
                    echo "<input type=text name=password value=$password><br>";
                    echo "<input type=text name=email value=$email><br>";
                    echo "<input type=text name=role value=$role><br>";
                    echo "<input type=text name=status value=$status><br>";
                   
                    echo"<input type=submit name=Submit value=Edit>";
                    echo"</form>";
                }
                break;
            }
        case "delete":
            {
                $sql="DELETE from user WHERE id=$iid ";
                include("connection.php");
                $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                if($qry){
                    header("Location:displayuser.php");
                }
                break;
            }
        default:{
            echo"unable to process the command";
        }
    }
    
?>

