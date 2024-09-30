<?php

$conn = new mysqli("localhost", "root", "", "yourattendence");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->query("UPDATE temp_attendence SET `01oct` = 0");


if (isset($_POST['attendance'])) {

    foreach ($_POST['attendance'] as $stu_id => $attendance_status) {

        $sql = "UPDATE temp_attendence SET `01oct` = 1 WHERE stu_id = '$stu_id'";
        $conn->query($sql);
    }
}


$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/takeattendence.css">
    <title>Attendence</title>
</head>
<body>
    <div class="table-container">
        <div class="header">
            <h2>Attendence</h2>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>Student no.</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Present/Absent</th>
                </tr>
            </thead>
            <tbody>
            <form method="post">
    <table>
        <tbody>
            <tr>
                <td>1</td>
                <td>01</td>
                <td>A</td>
                <td><input type="checkbox" name="attendance[01]" value="1"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>02</td>
                <td>B</td>
                <td><input type="checkbox" name="attendance[02]" value="1"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>03</td>
                <td>C</td>
                <td><input type="checkbox" name="attendance[03]" value="1"></td>
            </tr>
            <tr>
                <td>4</td>
                <td>04</td>
                <td>D</td>
                <td><input type="checkbox" name="attendance[04]" value="1"></td>
            </tr>
            <tr>
                <td>5</td>
                <td>05</td>
                <td>E</td>
                <td><input type="checkbox" name="attendance[05]" value="1"></td>
            </tr>
            <tr>
                <td>6</td>
                <td>06</td>
                <td>F</td>
                <td><input type="checkbox" name="attendance[06]" value="1"></td>
            </tr>
            <tr>
                <td>7</td>
                <td>07</td>
                <td>G</td>
                <td><input type="checkbox" name="attendance[07]" value="1"></td>
            </tr>
            <tr>
                <td>8</td>
                <td>08</td>
                <td>H</td>
                <td><input type="checkbox" name="attendance[08]" value="1"></td>
            </tr>
            <tr>
                <td>9</td>
                <td>09</td>
                <td>I</td>
                <td><input type="checkbox" name="attendance[09]" value="1"></td>
            </tr>
            <tr>
                <td>10</td>
                <td>10</td>
                <td>J</td>
                <td><input type="checkbox" name="attendance[10]" value="1"></td>
            </tr>
        </tbody>
    </table>
    <div class="btn">
        <button type="submit" class="second-btn">Submit</button>
    </div>
</form>

    </div>
</body>
</html>