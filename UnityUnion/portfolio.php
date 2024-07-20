<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="portfolio.css">
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
        <div class="portfolio-container">
            <div class="portfolio-header">
                <div class="header-left">
                    <h1>Organization Name</h1>
                    <p>Location: <span>City, Country</span></p>
                    <p>Established: <span>YYYY</span></p>
                    <p>Type: <span>Non-Profit / NGO / Other</span></p>
                </div>
                <div class="header-right">
                    <div class="logo-upload">
                        <img id="logo" src="#" alt="Organization Logo">
                        <input type="file" id="logoInput" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="portfolio-body">
                <div class="portfolio-section">
                    <h2>Skills Provided</h2>
                    <ul>
                        <li>Skill 1</li>
                        <li>Skill 2</li>
                        <li>Skill 3</li>
                    </ul>
                </div>
                <div class="portfolio-section">
                    <h2>Event Statistics</h2>
                    <p>Number of Completed Events: <span>10</span></p>
                    <p>Number of Volunteers Involved: <span>200</span></p>
                </div>
                <div class="portfolio-section">
                    <h2>Mission and Goal</h2>
                    <p>Our mission is to... Our goal is to...</p>
                </div>
                <div class="portfolio-section">
                    <h2>History</h2>
                    <p>Founded in YYYY, we have been working towards... Here is our story...</p>
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
        document.getElementById('logoInput').addEventListener('change', function(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const img = document.getElementById('logo');
                img.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
    </body>
</html>