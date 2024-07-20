<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="home.css">
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
        <div class="welcome-container">
            <h2 class="typewriter">Welcome to UnityUnion</h2>
            <p class="description">We are glad to have you here. Enjoy exploring!</p> 
        </div>
        <div class="content-container">
            <p class="description">Why organize the events?</p>
            <div class="images-container">
                <div class="image-item">
                    <img src="volunteer-6.webp" alt="Image 1">
                    <p>Organize to manage the waste garbage </p>
                    <a href="description1.php">learn more</a>
                </div>
                <div class="image-item">
                    <img src="Risk-Cover volunteering.jpg" alt="Image 2">
                    <p>Organize to manage the risk</p>
                    <a href="description2.php">learn more</a>
                </div>
                <div class="image-item">
                    <img src="Natural disaster volunteering.jpg" alt="Image 3">
                    <p>Organize to manage the natural disaster</p>
                    <a href="description3.php">learn more</a>
                </div>
            </div>
        </div>
        
        <div class="content-container">
            <p class="description">Benefits to organize events</p>
            <div class="images-container">
                <div class="image-item">
                    <img src="volunteer-2.jpg" alt="Benefit 1">
                    <p>Organize to donate food</p>
                    <a href="benefit1.php">learn more</a>
                </div>
                <div class="image-item">
                    <img src="conference volunteering.jpg" alt="Benefit 2">
                    <p>Organize to manage conference event</p>
                    <a href="benefit2.php">learn more</a>
                </div>
                <div class="image-item">
                    <img src="blood donation.webp" alt="Benefit 3">
                    <p>Organize to donate blood</p>
                    <a href="benefit3.php">learn more</a>
                </div>
            </div>
        </div>
        <div class="compound">
            <div class="text-content">
                <h2>Unifying Communities Through Event Management Volunteering</h2>
                <p>Event management volunteering plays a pivotal role in bringing communities together, fostering social cohesion, and creating memorable experiences that leave a lasting impact. From local festivals and charity fundraisers to cultural celebrations and sports events, volunteers contribute their time, skills, and enthusiasm to ensure the success of various gatherings. Through their dedication and teamwork, volunteers not only help organize and execute events smoothly but also create inclusive spaces where people from all walks of life can come together to connect, celebrate, and build meaningful relationships.

                    One of the key benefits of event management volunteering is its ability to strengthen community engagement and solidarity. By participating in the planning and execution of events, volunteers actively involve themselves in the life of their community, contributing to its vibrancy and vitality. Moreover, volunteering in event management provides opportunities for skill development, leadership growth, and networking, equipping volunteers with valuable tools and resources to become active contributors to their community's social and cultural fabric.</p>
            </div>
            <div class="image-content">
                <img src="volunteer-7.jpg" alt="Placeholder Image">
            </div>
        </div>
        
    
        <div class="faq">
            <h2>Frequently Asked Questions</h2>
            <div class="question">How do we create a organization profile?</div>
            <div class="answer">To create a volunteer profile, click on the "Sign Up" button on the homepage and fill in the required information.</div>

            <div class="question">How can we find a volunteer?</div>
            <div class="answer">You can find a volunteer to check the  dashboard ofmy application.</div>

            <div class="question">What should we do if we encounter an issue?</div>
            <div class="answer">If you encounter an issue, please contact our support team through the form below or email us at support@volunteermatch.com.</div>
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