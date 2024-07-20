<?php
session_start();

// Simulate user session for testing (replace with your actual session handling logic)
$_SESSION['user_id'] = 1; // Replace with a valid user ID for testing

require_once 'connection.php'; // Ensure your database connection is correctly included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Filter and sanitize inputs
    $event = filter_input(INPUT_POST, 'event', FILTER_SANITIZE_STRING);
    $rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT);
    $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);

    // Validate inputs
    if (!$event || !$rating || !$comments || $rating < 1 || $rating > 5) {
        $_SESSION['error'] = "Please fill in all fields and provide a valid rating (1-5).";
        header("Location: Feedback.php");
        exit();
    }

    // Get user ID from session (assuming it's already set correctly)
    $from_user_id = $_SESSION['user_id'];

    // Insert feedback into database
    $sql = "INSERT INTO event_feedback (volunteer_id, event_id, rating, comments, created_at) VALUES (?, ?, ?, ?, NOW())";

    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("iiis", $from_user_id, $event, $rating, $comments);

        // Execute statement
        if ($stmt->execute()) {
            $_SESSION['success'] = "Feedback submitted successfully!";
        } else {
            $_SESSION['error'] = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $_SESSION['error'] = "Error: " . $conn->error;
    }

    $conn->close();

    header("Location: Feedback.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Volunteer</title>
    <link rel="stylesheet" href="feedback.css">
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
        <div class="feedback-container">
            <h1>Feedback</h1>
            <div class="feedback-form">
                <h2>Submit Your Feedback</h2>
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
                <form id="feedbackForm" method="POST">
                    <div class="form-group">
                        <label for="event">Event:</label>
                        <select id="event" name="event" required>
                            <option value="" disabled selected>Select an event</option>
                            <option value="cleanup">Community Cleanup</option>
                            <option value="soup_kitchen">Animal rescue</option>
                            <option value="tree_planting">Tree Planting</option>
                            <!-- Add more events as necessary -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <div class="rating">
                            <input type="radio" name="rating" id="star5" value="5"><label for="star5">☆</label>
                            <input type="radio" name="rating" id="star4" value="4"><label for="star4">☆</label>
                            <input type="radio" name="rating" id="star3" value="3"><label for="star3">☆</label>
                            <input type="radio" name="rating" id="star2" value="2"><label for="star2">☆</label>
                            <input type="radio" name="rating" id="star1" value="1"><label for="star1">☆</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments">Comments:</label>
                        <textarea id="comments" name="comments" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit">Submit Feedback</button>
                </form>
            </div>
        </div>

        <div class="footer">
            <div class="footer-col">
                <div class="footerNav">
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Impact</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="Help and support.php">Help Center</a></li>
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
                    <p>Copyright &copy; 2024</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
