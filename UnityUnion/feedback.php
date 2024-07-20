!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <li><a href="Applications.php"><i class="fa-solid fa-file"></i>Applications</a></li>
            <li><a href="Portfolio.php"> <i class="fa-solid fa-folder-open"></i>Portfolio</a></li>
            <li><a href="Feedback.php"> <i class="fa-solid fa-comments"></i>Feedback</a> </li>
            <li><a href="Help and support.php"> <i class="fa-solid fa-circle-info"></i>Help and support</a></li>
            <li><a href="Settings.php"> <i class="fa-solid fa-gear"></i>Settings</a></li>
        </ul>
    </div>
    <div class="container">
        <!-- Main content goes here -->
        <div class="feedback-container">
            <h1>Feedback</h1>
            <div class="feedback-form">
                <h2>Submit Your Feedback</h2>
                <form id="feedbackForm">
                    <div class="form-group">
                        <label for="Name">Full Name:</label>
                        <input type="text" id="fulltName" name="fullName" required>
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
                    <button type="submit">Submit Feedback</button>
                </form>
            </div>
            <div class="feedback-history">
                <h2>Your Feedback History</h2>
                <div class="feedback-entry">
                    <div class="feedback-rating">★★★★★</div>
                    <p class="feedback-comment">Outstanding!</p>
                    <p class="feedback-event">Name:</p>
                    <p class="feedback-date">Submitted on: 2024-06-01</p>
                </div>

                <h2>Your Feedback History</h2>
                <div class="feedback-entry">
                    <div class="feedback-rating">★★★★☆</div>
                    <p class="feedback-comment">Excellence!</p>
                    <p class="feedback-event">Name:</p>
                    <p class="feedback-date">Submitted on: 2024-06-01</p>
                </div>

                <h2>Your Feedback History</h2>
                <div class="feedback-entry">
                    <div class="feedback-rating">★★★☆☆</div>
                    <p class="feedback-comment"> Very Good!</p>
                    <p class="feedback-event">Name:</p>
                    <p class="feedback-date">Submitted on: 2024-06-01</p>
                </div>

                <h2>Your Feedback History</h2>
                <div class="feedback-entry">
                    <div class="feedback-rating">★★☆☆☆</div>
                    <p class="feedback-comment">Good!</p>
                    <p class="feedback-event">Name:</p>
                    <p class="feedback-date">Submitted on: 2024-06-01</p>
                </div>
                

                <h2>Your Feedback History</h2>
                <div class="feedback-entry">
                    <div class="feedback-rating">★☆☆☆☆</div>
                    <p class="feedback-comment">Not Bad</p>
                    <p class="feedback-event">Name:</p>
                    <p class="feedback-date">Submitted on: 2024-06-01</p>
                </div>






                <!-- More feedback entries can be added here -->
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