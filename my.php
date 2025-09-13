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
<body background="hil.jpg">
    <div class="flex-container">
        <div class="flex-child magenta">
            <table class="table">
                <tr class="table-row">
                    <td>
                        <form method="post">
                            <div class="container">
                                <h1 id="heading!">Staff Register</h1>
                                <p id="p1">Please fill this form to create a Record.</p>
                                <hr>
                                <label id="label" for="Staff-Name"><b>Staff_Name</b></label>
                                <input type="text" placeholder="Enter Staff Name" name="name" id="name" required>

                                <label id="label" for="City"><b>City</b></label>
                                <input type="text" placeholder="Enter City" name="city" id="city" required>

                                <label id="label" for="Mobile"><b>Mobile_No</b></label>
                                <input type="text" placeholder="Enter Mobile No" name="Mobile" id="Mobile" required>

                                <label id="label" for="Department"><b>Department</b></label>
                                <input type="text" placeholder="Enter Department" name="Department" id="Department" required>

                                <label id="label" for="Graduation"><b>Graduation</b></label>
                                <input type="text" name="Graduation" id="Graduation" placeholder="Enter Graduation" required>

                                <label id="label" for="Experience"><b>Experience</b></label>
                                <input type="text" placeholder="Enter Experience" name="Experience" id="Experience" required>

                                <label id="label" for="Salary"><b>Salary</b></label>
                                <input type="text" placeholder="Enter Salary" name="Salary" id="Salary" required>

                                <label id="label" for="Subjects"><b>Subjects</b></label>
                                <input type="text" placeholder="Enter subjects They Teach" name="Subjects" id="Subjects" required>

                                <hr>
                                <button type="submit" name="submit" class="registerbtn">Submit</button>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>

        <form action="heloo1.php">
            <div class="form-field">
                <h4>For Searching</h4>
                <button class="btn" type="submit">Goto</button>
            </div>
        </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $na = $_REQUEST['name'];
    $ca = $_REQUEST['city'];
    $ma = $_REQUEST['Mobile'];
    $da = $_REQUEST['Department'];
    $ga = $_REQUEST['Graduation'];
    $en = $_REQUEST['Experience'];
    $sa = $_REQUEST['Salary'];
    $sb = $_REQUEST['Subjects'];

    $quer = "INSERT INTO staff_register
             (Staff_Name, City, Mobile_No, Department, Graduation, Experience, Salary, Subjects) 
             VALUES ('$na','$ca','$ma','$da','$ga','$en','$sa','$sb')";

    $data = mysqli_query($con, $quer);

    if ($data) {
        echo "<script>alert('Data Inserted Successfully');</script>";
    } else {
        echo "<script>alert('Failed to Insert Data');</script>";
    }

    mysqli_close($con);
}
?>
