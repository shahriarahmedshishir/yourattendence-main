<?php

include '__dbconnect.php';

if (isset($_POST['action']) && $_POST['action'] == 'signup') {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($email) && !empty($password)) {
    
        $sql = "INSERT INTO `user_control` (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(["status" => "success", "message" => "Account created successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error creating account."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Please fill out all fields."]);
    }
    exit();
}


if (isset($_POST['action']) && $_POST['action'] == 'signin') {

    $lemail = $_POST["email"];
    $lpassword = $_POST["password"];
    
    if (!empty($lemail) && !empty($lpassword)) {
    
        $stmt = $conn->prepare("SELECT user_id, username, password FROM user_control WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $lemail, $lpassword);
        $stmt->execute();
        $stmt->store_result();


        if ($stmt->num_rows > 0) {

            $stmt->bind_result($user_id, $username, $db_password);
            $stmt->fetch();


            session_start();


            $_SESSION['user_id'] = $user_id;     
            $_SESSION['username'] = $username;   
            $_SESSION['lemail'] = $lemail;      


            echo json_encode(["status" => "success", "message" => "Login successful! Redirecting..."]);
        } else {

            echo json_encode(["status" => "error", "message" => "Invalid email or password."]);
        }
        

        $stmt->close();
    } else {

        echo json_encode(["status" => "error", "message" => "Please fill out all fields."]);
    }

    exit(); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login/Sign Up</title>
</head>
<body>
    <div class="container">
 
        <div class="first-container">
            <div class="sign-in">
                <div class="left" id="first-left">
                    <h1>Sign In</h1>
                    <div class="icon">
                        <img src="./assets/images/google search.svg" alt="">
                        <img src="./assets/images/facebook logo.svg" alt="">
                        <img src="./assets/images/github.svg" alt="">
                        <img src="./assets/images/linkedin_social_icon.svg" alt="">
                    </div>
                    <p>or use your email and password</p>
                    <input type="email" id="login-email" placeholder="Email" required>
                    <input type="password" id="login-password" placeholder="Password" required>
                    <a href="#" class="fp">Forgot Your Password?</a>
                    <button onclick="signIn()">SIGN IN</button>
                </div>
            </div>
            <div class="right" id="first-right">
                <h1>Hello Friend!</h1>
                <p>Register with your personal details to use all <br> of the site's features</p>
                <button class="s-up" onclick="toggleForms()">SIGN UP</button>
            </div>
        </div>

   
        <div class="second-container" style="display:none;">
            <div class="sign-up">
                <div class="left" id="second-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of the site's <br> features</p>
                    <button class="s-in" onclick="toggleForms()">SIGN IN</button>
                </div>
                <div class="right" id="second-right">
                    <h1>Create Account</h1>
                    <div class="icon">
                        <img src="./assets/images/google search.svg" alt="">
                        <img src="./assets/images/facebook logo.svg" alt="">
                        <img src="./assets/images/github.svg" alt="">
                        <img src="./assets/images/linkedin_social_icon.svg" alt="">
                    </div>
                    <p>Or use your email for registration</p>
                    <input type="text" id="signup-username" placeholder="Name" required>
                    <input type="email" id="signup-email" placeholder="Email" required>
                    <input type="password" id="signup-password" placeholder="Password" required>
                    <button onclick="signUp()">SIGN UP</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        function toggleForms() {
            const signInContainer = document.querySelector('.first-container');
            const signUpContainer = document.querySelector('.second-container');

            signInContainer.style.display = signInContainer.style.display === "none" ? "flex" : "none";
            signUpContainer.style.display = signUpContainer.style.display === "none" ? "flex" : "none";
        }

       
        function signUp() {
            const username = document.getElementById('signup-username').value;
            const email = document.getElementById('signup-email').value;
            const password = document.getElementById('signup-password').value;

            if (username && email && password) {
                const data = new FormData();
                data.append('action', 'signup');
                data.append('username', username);
                data.append('email', email);
                data.append('password', password);

                fetch('', {
                    method: 'POST',
                    body: data
                })
                .then(response => response.json())
                .then(result => {
                    alert(result.message); 
                    if (result.status === 'success') {
                        window.location.href = 'index.php';
                    }
                })
                .catch(error => console.error('Error:', error));
            } else {
                alert('Please fill out all fields.');
            }
        }

        function signIn() {
            const email = document.getElementById('login-email').value;
            const password = document.getElementById('login-password').value;

            if (email && password) {
                const data = new FormData();
                data.append('action', 'signin');
                data.append('email', email);
                data.append('password', password);

                fetch('', {
                    method: 'POST',
                    body: data
                })
                .then(response => response.json())
                .then(result => {
                   
                    if (result.status === 'success') {
                        window.location.href = 'home.php'; 
                    }else{
                        alert(result.message); 
                    }
                })
                .catch(error => console.error('Error:', error));
            } else {
                alert('Please fill out all fields.');
            }
        }
    </script>

    <script src="./assets/js/main.js"></script>
</body>
</html>
