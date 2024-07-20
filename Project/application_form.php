<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="form.css">
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
            <button class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>

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
        <div class="form-container">
            <h1>Volunteer Application Form</h1>
            <form action="/submit_application" method="post">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
    
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="address">Address</label>
                <input type="address" id="address" name="address" required>
    
                <label for="opportunity">Select Opportunity</label>
                <select id="opportunity" name="opportunity" required>
                    <option value="community_cleanup">Community Cleanup</option>
                    <option value="food_drive">Food Drive Assistant</option>
                    <option value="senior_companion">Senior Companion</option>
                </select>
    
                <label for="message">Why do you want to volunteer?</label>
                <textarea id="message" name="message" rows="4" required></textarea>
    
                <button type="submit" class="submit-btn">Submit Application</button>
            </form>
        </div>
    <div class="footer">
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
</body>
</html>