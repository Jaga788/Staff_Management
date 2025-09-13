<?php
include("connect.php"); 
error_reporting(0);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="./Crud2.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-child magenta">
            <table class="table">
                <tr class="table-row">
                    <td>
                        <form method="post">
                            <div class="container">

                                <h1 id="heading">Staff Leaves Register</h1>
                                <p id="p1">Please fill this form to create a Record.</p>
                                <hr>

                                <label id="label" for="Staff_Name"><b>Staff_Name</b></label>
                                <input type="text" placeholder="Enter Staff Name" name="name" id="name" required>

                                <label id="label" for="Profession"><b>Profession</b></label>
                                <input type="text" placeholder="Enter Profession" name="Profession" id="Profession" required>

                                <label id="label" for="CLSH"><b>CLS_They_Have</b></label>
                                <input type="text" placeholder="Enter CLSH" name="CLSH" id="CLSH" required>

                                <label id="label" for="CLSU"><b>CLS_They_Used</b></label>
                                <input type="text" placeholder="Enter CLSU" name="CLSU" id="CLSU" required>

                                <label id="label" for="ELSH"><b>ELS_They_Have</b></label>
                                <input type="text" placeholder="Enter ELSH" name="ELSH" id="ELSH" required>

                                <label id="label" for="ELSU"><b>ELS_They_Used</b></label>
                                <input type="text" placeholder="Enter ELSU" name="ELSU" id="ELSU" required>

                                <label id="label" for="SLSH"><b>SLS_They_Have</b></label>
                                <input type="text" placeholder="Enter SLSH" name="SLSH" id="SLSH" required>

                                <label id="label" for="SLSU"><b>SLS_They_Used</b></label>
                                <input type="text" placeholder="Enter SLSU" name="SLSU" id="SLSU" required>

                                <hr>
                                <button type="submit" name="submit" class="registerbtn">Submit</button>

                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>

        <form action="heloo.php">
            <div class="form-field">
                <h4>For searching</h4>
                <button class="btn" type="submit">Goto</button>
            </div>
        </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $Sna = $_POST['name'];
    $Sca = $_POST['Profession'];
    $Sma = $_POST['CLSH'];
    $Sda = $_POST['CLSU'];
    $Sga = $_POST['ELSH'];
    $Sea = $_POST['ELSU'];
    $Ssa = $_POST['SLSH'];
    $Ssb = $_POST['SLSU'];

    $Squer = "INSERT INTO staff_leaves 
             (Staff_Name, Profession, CLSH, CLSU, ELSH, ELSU, SLSH, SLSU) 
             VALUES ('$Sna','$Sca','$Sma','$Sda','$Sga','$Sea','$Ssa','$Ssb')";

    $Sdata = mysqli_query($con, $Squer);

    if ($Sdata) {
        echo "<script>alert('Data Inserted Successfully');</script>";
    } else {
        echo "Failed: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
