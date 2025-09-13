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
    border-collapse: collapse;
    text-align: center;
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
    $search = $_POST['search'];
    // LIKE used for flexible search
    $sql = "SELECT * FROM staff_leaves WHERE Staff_Name LIKE '%$search%'";
    $result = mysqli_query($con, $sql);

    if ($result)
    {
        if (mysqli_num_rows($result) > 0)
        {
            echo "<thead>
            <tr>
            <th>Staff_Name</th>
            <th>Profession</th>
            <th>CLS_They_Have</th>
            <th>CLS_They_Used</th>
            <th>ELS_They_Have</th>
            <th>ELS_They_Used</th>
            <th>SLS_They_Have</th>
            <th>SLS_They_Used</th>
            </tr>
            </thead><tbody>";

            // loop for multiple records
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>".$row['Staff_Name']."</td>
                <td>".$row['Profession']."</td>
                <td>".$row['CLSH']."</td>
                <td>".$row['CLSU']."</td>
                <td>".$row['ELSH']."</td>
                <td>".$row['ELSU']."</td>
                <td>".$row['SLSH']."</td>
                <td>".$row['SLSU']."</td>
                </tr>";
            }

            echo "</tbody>";
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
