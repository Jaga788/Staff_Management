<?php
include("connect.php");
error_reporting(0);
?>
<html>
<head>
<title>serching</title>
<style>
table,th,td {
    border: 1px solid black;
    background-color:#96D4D4;
}
</style>
</head>
<body>
<form method="post">
<input type="text" name="search" placeholder="search data">
<button name="submit">search</button>
</form>
<table style="width: 100%">
<?php
if(isset($_POST['submit']))
{
    $search=$_POST['search'];
    $sql="select * from staff_register where Staff_Name='$search'";
    $result=mysqli_query($con,$sql);

    if ($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            echo "<thead>
            <tr>
            <th>Staff_Name</th>
            <th>City</th>
            <th>Mobile_No</th>
            <th>Department</th>
            <th>Graduation</th>
            <th>Experience</th>
            <th>Salary</th>
            <th>Subjects</th>
            </tr>
            </thead>";

            $row=mysqli_fetch_assoc($result);
            echo "<tbody>
            <tr>
            <td>".$row['Staff_Name']."</td>
            <td>".$row['City']."</td>
            <td>".$row['Mobile_No']."</td>
            <td>".$row['Department']."</td>
            <td>".$row['Graduation']."</td>
            <td>".$row['Experience']."</td>
            <td>".$row['Salary']."</td>
            <td>".$row['Subjects']."</td>
            </tr>
            </tbody>";
        }
        else
        {
            echo "DATA NOT FOUND";
        }
    }
}
?>
</table>
</body>
</html>
