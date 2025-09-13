<?php
include("connect.php");
error_reporting(0);
?>

<html>
<head>
<title>searching</title>
<style>
table, th, td {
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
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM staff_salary WHERE Staff_Name='$search'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<thead>
            <tr>
            <th>Staff_Name</th>
            <th>Profession</th>
            <th>Salary</th>
            <th>Working_Days</th>
            <th>Present_Days</th>
            <th>LOP</th>
            <th>Current_Salary</th>
            </tr>
            </thead>";

            $row = mysqli_fetch_assoc($result);

            echo "<tbody>
            <tr>
            <td>".$row['Staff_Name']."</td>
            <td>".$row['Profession']."</td>
            <td>".$row['Salary']."</td>
            <td>".$row['Working_Days']."</td>
            <td>".$row['Present_Days']."</td>
            <td>".$row['LOP']."</td>
            <td>".$row['Current_Salary']."</td>
            </tr>
            </tbody>";
        } else {
            echo "DATA NOT FOUND";
        }
    }
}
?>
</table>
</body>
</html>
