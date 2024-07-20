<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="event.css">
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
        <form class="event-form">
            <div class="event-photo">
                <label for="event-photo">Event Photo:</label>
                <input type="file" id="event-photo" name="event-photo" accept="image/*" onchange="previewImage(event)">
                <img id="photo-preview" alt="Event Photo Preview">
            </div>
            <div class="event-details">
                <div class="form-group">
                    <label for="event-name">Event Name:</label>
                    <input type="text" id="event-name" name="event-name" required>
                </div>
                <div class="form-group">
                    <label for="event-date">Starting Date:</label>
                    <input type="date" id="event-starting-date" name="event-starting-date" required>
                </div>
                <div class="form-group">
                    <label for="event-date">Ending Date:</label>
                    <input type="date" id="event-ending-date" name="event-ending-date" required>
                </div>
                <div class="form-group">
                    <label for="event-time">Time:</label>
                    <input type="time" id="event-time" name="event-time" required>
                </div>
                <div class="form-group">
                    <label for="event-location">Location:</label>
                    <input type="text" id="event-location" name="event-location" required>
                </div>
                <div class="form-group">
                    <label for="event-email">Contact Number:</label>
                    <input type="email" id="event-email" name="event-email" required>
                </div>
                <div class="form-group">
                    <label for="event-email">Email:</label>
                    <input type="email" id="event-email" name="event-email" required>
                </div>
                <div class="form-actions">
                    <button type="submit">Add Event</button>
                    <button type="reset">Reset</button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <br>
        
        

        <div class="events-section">
            <h2>Upcoming Events</h2>
            <div class="event-card">
                <img src="Animal care.jpg" alt="Animal-care">
                <div class="event-details">
                    <h3>Animal Shelter</h3>
                    <p><strong>Date:</strong> 2024-07-20</p>
                    <p><strong>Time:</strong> 10:00</p>
                    <p><strong>Location:</strong> Library</p>
                    <p><strong>Email:</strong> event@example.com</p>
                </div>
            </div>
            <div class="event-card">
                <img src="food-drive.jpeg" alt="food drive">
                <div class="event-details">
                    <h3>Food Drive</h3>
                    <p><strong>Date:</strong> 2024-08-30</p>
                    <p><strong>Time:</strong> 09:00</p>
                    <p><strong>Location:</strong> School Hall</p>
                    <p><strong>Email:</strong> outreach@example.com</p>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="events-section">
            <h2>Past Events</h2>
            <div class="event-card">
                <img src="community-clean-up.webp" alt="community cleanup">
                <div class="event-details">
                    <h3>Community Cleanup</h3>
                    <p><strong>Date:</strong> 2023-05-10</p>
                    <p><strong>Time:</strong> 14:00</p>
                    <p><strong>Location:</strong> Community Center</p>
                    <p><strong>Email:</strong> contact@example.com</p>
                </div>
            </div>
            <div class="event-card">
                <img src="tree-planting.jpg" alt="Tree planning">
                <div class="event-details">
                    <h3>Tree Planning</h3>
                    <p><strong>Date:</strong> 2023-06-15</p>
                    <p><strong>Time:</strong> 16:00</p>
                    <p><strong>Location:</strong> Park</p>
                    <p><strong>Email:</strong> info@example.com</p>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <div class="footer">
            <div class="footer-col">
                <div class="footerNav">
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Contact Us</a></li>              
                    </ul>
                    <ul>
                        <li><a href=""></a>Impact</li>
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
                    <p>Copyright &copy;2024</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('photo-preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
    </body>
</html>