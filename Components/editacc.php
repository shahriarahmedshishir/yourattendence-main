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
    <title>Edit Account</title>
    <link rel="stylesheet" href="../assets/css/editacc.css">
</head>
<body>
    <div class="edit-account-container">
        <h2>Edit Account</h2>
        <div class="profile-photo-section">
            <img src="../assets/images/user.png" alt="Profile Photo" id="profile-photo">
            <button class="upload-btn">Select Profile Photo</button>
        </div>
        
        <form action="#" method="POST" class="edit-account-form">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo  $_SESSION['username'] ; ?>" disabled>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($lemail); ?>" disabled>   
            <div class="button-group">
                <button type="submit" class="save-btn">Save Changes</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
