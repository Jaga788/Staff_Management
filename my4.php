<?php
include("connect.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="./Crud2.css">

    <script>
        function submit1() {
            var a = document.getElementById("Salary").value;
            var b = document.getElementById("Wdays").value;
            var c = document.getElementById("Pdays").value;

            var d = b - c;              // absent days
            var e = a / b;              // per day salary
            var f = e * d;              // loss of pay

            document.getElementById("LOP").value = f;
            alert("Loss of Pay: " + f);
        }

        function submit2() {
            var a = document.getElementById("Salary").value;
            var b = document.getElementById("Wdays").value;
            var c = document.getElementById("Pdays").value;

            var d = b - c;              // absent days
            var e = a / b;              // per day salary
            var f = e * d;              // loss of pay
            var total = a - f;          // current salary

            document.getElementById("Stotal").value = total;
            alert("Current Salary: " + total);
        }
    </script>
</head>

<body class="bg">
    <div class="flex-container">
        <div class="flex-child magenta">
            <table class="table">
                <tr class="table-row">
                    <td>
                        <form method="post">
                            <div class="container">

                                <h1 id="heading1">Staff Salary Calculation Register</h1>
                                <p id="p1">Please fill this form to create a Record.</p>
                                <hr>

                                <label id="label" for="name"><b>Staff_Name</b></label>
                                <input type="text" placeholder="Enter name" name="name" id="name" required>

                                <label id="label" for="Profession"><b>Profession</b></label>
                                <input type="text" placeholder="Enter Profession" name="Profession" id="Profession"
                                    required>

                                <label id="label" for="Salary"><b>Salary</b></label>
                                <input type="text" placeholder="Enter Salary" name="Salary" id="Salary" required>

                                <label id="label" for="Wdays"><b>Working_Days</b></label>
                                <input type="text" placeholder="Enter working days" name="Wdays" id="Wdays" required>

                                <label id="label" for="Pdays"><b>Present_Days</b></label>
                                <input type="text" placeholder="Enter present days" name="Pdays" id="Pdays" required>

                                <label id="label" for="LOP"><b>LOP</b></label>
                                <input type="text" placeholder="Loss of Pay" name="LOP" id="LOP" required>

                                <label id="label" for="Stotal"><b>Current_Salary</b></label>
                                <input type="text" placeholder="Enter Current Salary" name="Stotal" id="Stotal"
                                    required>

                                <hr>

                                <button type="button" name="submit10" class="registerbtn" onclick="submit1()">Get Loss
                                    Of Pay</button><br><br>
                                <button type="button" name="submit11" class="registerbtn" onclick="submit2()">Get
                                    Current Salary</button><br><br>
                                <button type="submit" name="submit12" class="registerbtn">Submit</button>

                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>

        <form action="heloo2.php">
            <div class="form-field">
                <h4>For searching</h4>
                <button class="btn" type="submit">Goto</button>
                <p>LOP - Loss of Pay</p>
            </div>
        </form>
</body>

</html>

<?php
if (isset($_POST['submit12'])) {
    $Sna = $_REQUEST['name'];
    $Sca = $_REQUEST['Profession'];
    $Sma = $_REQUEST['Salary'];
    $Sda = $_REQUEST['Wdays'];
    $Sga = $_REQUEST['Pdays'];
    $Sea = $_REQUEST['LOP'];
    $Ssa = $_REQUEST['Stotal'];

    $Squer = "INSERT INTO staff_salary (Staff_Name, Profession, Salary, Working_Days, Present_Days, LOP, Current_Salary) 
              VALUES ('$Sna','$Sca','$Sma','$Sda','$Sga','$Sea','$Ssa')";

    $Sdata = mysqli_query($con, $Squer);

    if ($Sdata) {
        echo "database ok";
    } else {
        echo "failed: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>