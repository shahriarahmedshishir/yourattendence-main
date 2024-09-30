<?php
session_start(); 


if (isset($_POST['create'])) {

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id']; 
    } else {
        echo "User not logged in!";
        exit();
    }


    $semester = $_POST['semister'];
    $section = $_POST['section'];
    $course_name = $_POST['subject'];
    $course_code = $_POST['coursecode'];

 
    $host = 'localhost';
    $db = 'yourattendence';
    $user = 'root';
    $pass = '';

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO add_class (semister, section, course_name, course_code, user_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $semester, $section, $course_name, $course_code, $user_id);


    if ($stmt->execute()) {
        $_SESSION['semister'] = $semester;
        $_SESSION['section'] = $section;
        $_SESSION['couse_name'] = $course_name;
        $_SESSION['course_code'] = $course_code;
        $_SESSION['user_id'] = $user_id;
        
        header("Location: assignstudents.php");

    } else {
        echo "Error: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/createclasscard.css">
    <title>Create Class</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Create Class</h2>
        </div>
        <form method="post" >
        <div class="semister">
            <label for="semister">Semister:</label>
            <input type="text" name="semister" id=""  required>
        </div>
        <div class="section">
            <label for="section">Section:</label>
            <input type="text" name="section" id=""  required>
        </div>
        <div class="subject">
            <label for="subject">Course:</label>
            <input type="text" name="subject" id="" required >
        </div>
        <div class="coursecode">
            <label for="coursecode">Course Code:</label>
            <input type="text" name="coursecode" id=""  required>
        </div>
        <a href="../Components/assignstudents.html"><button type="submit" name="create">Create</button></a>
        </form>
    </div>
</body>
</html>