<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="events.css">
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
        <div class="events-container">
            <div class="event-card">
                <img src="volunteer17.webp" alt="Event Image" class="event-image">
                <h2 class="event-title">City Cleanup Day</h2>
                <p class="event-date">Date: June 20, 2024</p>
                <p class="event-location">Location: Kathmandu, Nepal</p>
                <p class="event-description">Join us for a day of cleaning up the beautiful Kathmandu. Help us protect the beauty and keep our city clean. Snacks and drinks will be provided.</p>
                <div class="event-footer">
                    <button class="like-btn" onclick="toggleLike(this)">❤️ Like</button>
                    <a href="application_form.php" class="apply-btn">Apply Now</a>
                </div>
            </div>
            <!-- Repeat the event card with different event details -->
            <div class="event-card">
                <img src="volunteer18.jpg" alt="Event Image" class="event-image">
                <h2 class="event-title">Community park Planting</h2>
                <p class="event-date">Date: July 15, 2024</p>
                <p class="event-location">Location: Banaskhandi park, Hetauda </p>
                <p class="event-description">Help us plant in a new community park in Hetauda. Bring your gardening gloves and enthusiasm!</p>
                <div class="event-footer">
                    <button class="like-btn" onclick="toggleLike(this)">❤️ Like</button>
                    <a href="application_form.php" class="apply-btn">Apply Now</a>
                </div>
            </div>
            <div class="event-card">
                <img src="volunteer19.jpg" alt="Event Image" class="event-image">
                <h2 class="event-title">Food Drive</h2>
                <p class="event-date">Date: August 5, 2024</p>
                <p class="event-location">Location: Aacham, Nepal</p>
                <p class="event-description">Join us in collecting and distributing food to those in need. Volunteers are needed for various tasks.</p>
                <div class="event-footer">
                    <button class="like-btn" onclick="toggleLike(this)">❤️ Like</button>
                    <a href="application_form.php" class="apply-btn">Apply Now</a>
                </div>
            </div>
            <div class="event-card">
                <img src="volunteer22.jpg" alt="Event Image" class="event-image">
                <h2 class="event-title">Animal Shelter Volunteering</h2>
                <p class="event-date">Date: September 10, 2024</p>
                <p class="event-location">Location: Greenfield Animal Shelter, TX</p>
                <p class="event-description">Spend a day helping at the animal shelter. Duties include feeding, cleaning, and playing with the animals.</p>
                <div class="event-footer">
                    <button class="like-btn" onclick="toggleLike(this)">❤️ Like</button>
                    <a href="application_form.php" class="apply-btn">Apply Now</a>
                </div> 
            </div>
            <div class="event-card">
                <img src="volunteer12.jpg" alt="Event Image" class="event-image">
                <h2 class="event-title">River Clean up</h2>
                <p class="event-date">Date: October 12, 2024</p>
                <p class="event-location">Location: Sunshine Senior Home, Tokha</p>
                <p class="event-description">Visit and spend time with the elderly residents at Sunshine Senior Home. Activities include games, reading, and conversations.</p>
                <div class="event-footer">
                    <button class="like-btn" onclick="toggleLike(this)">❤️ Like</button>
                    <a href="application_form.php" class="apply-btn">Apply Now</a>
                </div>
            </div>
            <div class="event-card">
                <img src="whyvol.webp" alt="Event Image" class="event-image">
                <h2 class="event-title">Park Beautification</h2>
                <p class="event-date">Date: November 20, 2024</p>
                <p class="event-location">Location: Sankhamul Park</p>
                <p class="event-description">Join us in cleaning and beautifying Sankhamul Park. Tasks include picking up litter, planting flowers, and painting benches.</p>
                <div class="event-footer">
                    <button class="like-btn" onclick="toggleLike(this)">❤️ Like</button>
                    <a href="application_form.php" class="apply-btn">Apply Now</a>
                </div>
            </div>
        </div>
    
        <script>
            function toggleLike(button) {
                if (button.classList.contains('liked')) {
                    button.classList.remove('liked');
                    button.textContent = '❤️ Like';
                } else {
                    button.classList.add('liked');
                    button.textContent = '💔 Unlike';
                }
            }
        </script>
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