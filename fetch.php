<!-- How to retrive data -->

<?php
$sql="SELECT * FROM inquiry ORDER BY id DESC";
include("connection.php");
$qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$count=mysqli_num_rows($qry);
?>
<!DOCTYPE html>
<html>
<h2>We have <?php echo $count;?>Records</h2>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Course</th>
        <th>City</th>
        <th>Message</th>
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
        echo "<td>".$row["firstname"]."</td>";
        echo "<td>".$row["lastname"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["dob"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "<td>".$row["course"]."</td>";
        echo "<td>".$row["city"]."</td>";
        echo "<td>".$row["message"]."</td>";
        echo "<td>".$row["status"]."</td>";
        echo "<td>".$row["created_at"]."</td>";
        echo "<td>".$row["updated_at"]."</td>";
        echo "<td> <a href =editdelete.php?iid=$iid&action=edit>EDIT</a>

         <a href ='editdelete.php?iid=$iid&action=delete'>DELETE</a>
       
        </td>";
    }
?>
</table>
</body>
</html>
