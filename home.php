<?php
session_start();

    $lemail = $_SESSION['lemail'];
    if (!isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        header("Location: index.php"); 
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="top-navbar">
            <div class="logo">
                <img src="assets/images/logo.png" alt="">
            </div>
            <div class="mid">
                <h1>Hi, Welcome to Your Attendence App!!</h1>
            </div> 
            <div class="account-information">
                <div class="name"><?php echo  $_SESSION['username'] ; ?></div>
                <img class="profile-img" src="assets/images/user.png" alt="">
                <abbr title="click for account-information"><img src="assets/images/drop-down-icon.svg" alt="" class="icon-img"></abbr>
                <div class="information-card">
                    <div class="mail">
                        <p><?php echo htmlspecialchars($lemail); ?></p>
                    </div>
                    <img src="assets/images/user.png" alt="">
                    <div class="name"><?php echo "Welcome, " . $_SESSION['username'] . "!"; ?></div>
                    <div class="account">
                        <a href="Components/editacc.php"><h3>Manage Your Account</h3></a>
                    </div>
                    <div class="action-button">
                        <a class="action-btn-1" href="./index.html"><img src="./assets/images/log-in.svg" alt=""><h3>Add Account</h3></a>
                        <a class="action-btn-2" href="index.php"><img src="./assets/images/log-out.svg" alt=""><h3>Log Out</h3></a>
                    </div>
                    <div class="privacy">
                        <a href="#"><li>privacy and policy</li></a>
                        <a href="#"><li>terms and services</li></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="side-bar">
            <ul>
                <li class="home-btn">Home</li>
                <li class="class-btn">Classes</li>
                <li class="dash-btn">Dashboard</li>
                <li class="repo-btn">Reports</li>
                <li class="about-btn" id="forbidden-btn">Abouts</li>
            </ul>
        </div>
        <div class="components">
            <div class="home">
                <div class="container">
                    <p class="simple-des"> An attendance app is a software application that allows you to track employee/students attendance records. These apps can be used to record when employees/students clock in and out of work, calculate their total hours worked, and identify any absences. Attendance apps can be used by businesses/Educational Institutions of all sizes, and they can be accessed from a variety of devices, including computers, smartphones, and tablets.</p>
                </div>
                <div class="button">
                    <a href="./Components/createclasscard.php"><button class="create-class-btn">Create Class</button></a>
                    <a href="#"><button class="take-attendence-btn">Take Attendence</button></a>
                </div>
                
            </div>
            <div class="classes">
                <div class="container">
                    <div class="class">
                        <h2>Software Dev 2</h2>
                        <h3>CSE-2291</h3>
                        <h3>C</h3>
                        <a href="Components/takeattendence.php"><Button>Go</Button></a>
                    </div>
                </div>
            </div>
            <div class="dashboard"></div>
            <div class="reports"></div>
        </div>
    </main>
    <footer>
        <p>copyright &copy; 2024</p>
        <p>All rights reserved</p>
    </footer>
    <script src="assets/js/home.js"></script>
</body>
</html>