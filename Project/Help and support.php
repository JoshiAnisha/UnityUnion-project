<?php
session_start();
require_once 'connection.php'; // include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Check for required fields
    if (!$name || !$email || !$message) {
        $_SESSION['error'] = "All fields are required.";
    } else {
        
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;

       
        $sql = "INSERT INTO support_messages (user_id, message, created_at) VALUES (?, ?, NOW())";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("is", $user_id, $message);

            if ($stmt->execute()) {
                $_SESSION['success'] = "Support request submitted successfully!";
            } else {
                $_SESSION['error'] = "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $_SESSION['error'] = "Error: " . $conn->error;
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="help and support.css">
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
        <h1>Help and Support</h1>

        <div class="faq">
            <h2>Frequently Asked Questions</h2>
            <div class="question">How do I create a volunteer profile?</div>
            <div class="answer">To create a volunteer profile, click on the "Sign Up" button on the homepage and fill in the required information.</div>

            <div class="question">How do I find volunteer opportunities?</div>
            <div class="answer">You can find volunteer opportunities by using the search bar on the dashboard or browsing through the categories.</div>

            <div class="question">What should I do if I encounter an issue?</div>
            <div class="answer">If you encounter an issue, please contact our support team through the form below or email us at support@volunteermatch.com.</div>
        </div>

        <div class="contact-form">
            <h2>Contact Us</h2>
            <?php
            if (isset($_SESSION['error'])) {
                echo '<p style="color:red;">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
                echo '<p style="color:green;">' . $_SESSION['success'] . '</p>';
                unset($_SESSION['success']);
            }
            ?>
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
        <script>
            document.querySelectorAll('.faq .question').forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    if (answer.style.display === 'block') {
                        answer.style.display = 'none';
                    } else {
                        answer.style.display = 'block';
                    }
                });
            });
        </script>
        <br>
        <br>
        <br>
        <div class="footer">
            <div class="footer-col">
                <div class="footerNav">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Contact Us</a></li>              
                    </ul>
                    <ul>
                        <li><a href=""></a>Impact</li>
                        <li><a href="">Support</a></li>
                        <li><a href="">Help Center</a></li>               
                    </ul>
                    <ul>
                        <li><a href="">Contact us</a></li>
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
    </div>
</body>
</html>
