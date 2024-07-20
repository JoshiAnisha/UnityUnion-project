<?php
// Include database connection
include('connection.php');

// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}

$detailsUpdateMessage = '';
$passwordChangeMessage = '';

// Check if the form for updating details is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update-details']) && $_POST['update-details'] == '1') {
        $username = sanitizeInput($_POST['username']);
        $email = sanitizeInput($_POST['email']);

        // Assuming you have some user identification method here
        $userId = 1; // Hardcoded for demonstration. Replace with actual user ID.

        // Update user details query
        $sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $username, $email, $userId);

        if ($stmt->execute()) {
            $detailsUpdateMessage = "Details updated successfully.";
        } else {
            $detailsUpdateMessage = "Failed to update details.";
        }
    }

    // Check if the form for changing password is submitted
    if (isset($_POST['change-password']) && $_POST['change-password'] == '1') {
        $currentPassword = sanitizeInput($_POST['current-password']);
        $newPassword = sanitizeInput($_POST['new-password']);
        $confirmPassword = sanitizeInput($_POST['confirm-password']);

        if ($newPassword !== $confirmPassword) {
            $passwordChangeMessage = "New passwords do not match.";
        } else {
            $userId = 1; // Hardcoded for demonstration. Replace with actual user ID.

            // Get current hashed password from the database
            $sql = "SELECT password FROM users WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $stmt->bind_result($hashedPassword);
            $stmt->fetch();
            $stmt->close();

            // Verify current password
            if (password_verify($currentPassword, $hashedPassword)) {
                // Hash new password
                $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                // Update password in the database
                $sql = "UPDATE users SET password = ?, password_hashed = 1 WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("si", $newHashedPassword, $userId);

                if ($stmt->execute()) {
                    $passwordChangeMessage = "Password changed successfully.";
                } else {
                    $passwordChangeMessage = "Failed to change password.";
                }
            } else {
                $passwordChangeMessage = "Current password is incorrect.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="settings.css">
    <script src="https://kit.fontawesome.com/ffd4493c59.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <div class="nav">
        <div class="brand-name">
            UnityUnion
        </div>
        <div class="search">
            <input type="text" placeholder="Search...">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="user">
            <label for="profile-picture" class="profile-picture-label">
            <i class="fa-solid fa-user"></i>
            <input type="file" id="profile-picture" accept="image/*" style="display:none;">       
            </label>
        </div>
    </div>
</div>
<div class="side-menu">
    <ul>
        <li><a href="Home.php"><i class="fa-solid fa-house"></i>Home</a></li>
        <li><a href="Events.php"><i class="fa-solid fa-calendar-days"></i>Events</a></li>
        <li><a href="My Application.php"><i class="fa-solid fa-file"></i>My Application</a></li>
        <li><a href="Portfolio.php"> <i class="fa-solid fa-folder-open"></i>Portfolio</a></li>
        <li><a href="Feedback.php"> <i class="fa-solid fa-comments"></i>Feedback</a> </li>
        <li><a href="Help and support.php"> <i class="fa-solid fa-circle-info"></i>Help and support</a></li>
        <li><a href="Settings.php"> <i class="fa-solid fa-gear"></i>Settings</a></li>
    </ul>
</div>
    <div class="container">
        <!-- Main content goes here -->
        
        <div class="settings-container">
            <h1>Settings</h1>
            <?php if ($detailsUpdateMessage) echo "<p>$detailsUpdateMessage</p>"; ?>
            <?php if ($passwordChangeMessage) echo "<p>$passwordChangeMessage</p>"; ?>
            <div class="settings-section">
                <h2>Change Password</h2>
                <form id="change-password-form" method="POST" action="">
                    <input type="hidden" name="change-password" value="1">
                    <label for="current-password">Current Password</label>
                    <input type="password" id="current-password" name="current-password" required>
                    <label for="new-password">New Password</label>
                    <input type="password" id="new-password" name="new-password" required>
                    <label for="confirm-password">Confirm New Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                    <button type="submit">Update Password</button>
                </form>
            </div>
    
            <div class="settings-section">
                <h2>Update Details</h2>
                <form id="update-details-form" method="POST" action="">
                    <input type="hidden" name="update-details" value="1">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <button type="submit" class="submit-button">Update Details</button>
                </form>
            </div>
    
        </div>
    <div class="footer">
        <div class="footer-col">
            <div class="footerNav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contact Us</a></li>              
                </ul>
                <ul>
                    <li><a href="">Impact</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Help Center</a></li>               
                </ul>
                <ul>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Team</a></li>
                    <li><a href="">Privacy</a></li>              
                </ul>
            </div>
            <div class="footerBottom">
                <div class="socialIcons">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
                <p>Copyright &copy;2024</p>
            </div>
        </div>
    </div>
</body>
</html>
