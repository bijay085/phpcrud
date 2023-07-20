<!-- How to retrive data -->

<?php
$sql="SELECT * FROM user ORDER BY id DESC";
include("connection.php");
$qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$count=mysqli_num_rows($qry);
?>
<!DOCTYPE html>
<html>
<h2>We have <?php echo $count;?>Records</h2>
<body>
<style>
    table 
    {
        border-collapse: collapse;
    }
</style>

<table border="1px">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Passowrd</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Function</th>
    </tr>
    <?php
    while($row=mysqli_fetch_array($qry))
    {
        $iid=$row["id"];
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["role"]."</td>";
        echo "<td>".$row["status"]."</td>";
        echo "<td>".$row["created_at"]."</td>";
        echo "<td>".$row["updated_at"]."</td>";
        echo "<td> <a href =deleteuser.php?iid=$iid&action=edit>EDIT</a>

        <a href ='deleteuser.php?iid=$iid&action=delete'>DELETE</a>
        </td>";
    }
?>
</table>
</body>
</html>
