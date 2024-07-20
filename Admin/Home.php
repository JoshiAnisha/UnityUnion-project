<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="style.css">
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
            <li><a href="Volunteers.php"><i class="fa-solid fa-handshake-angle"></i>Volunteers</a></li>
            <li><a href="Organizations.php"><i class="fa-solid fa-building"></i>Organizations</a></li>
            <li><a href="User Manage.php"><i class="fa-solid fa-users"></i>User Management</a></li>
            <li><a href="Content manage.php"><i class="fa-solid fa-file-pen"></i> Content Management</a> </li>
            <li><a href="Help and support.php"> <i class="fa-solid fa-circle-info"></i>Help and support</a></li>
            <li><a href="Settings.php"> <i class="fa-solid fa-gear"></i>Settings</a></li>
        </ul>
    </div>
    <div class="container">
        <!-- Main content goes here -->
        <div class="welcome-container">
            <h2 class="welcome-message">Welcome to UnityUnion!</h2>
        </div>

        <div class="management-container">
            <div class="management-item" onclick="location.href='User Manage.php';">
                <h3>User Management</h3>
                <p>Manage user accounts and permissions.</p>
            </div>
            <div class="management-item" onclick="location.href='Content manage.php';">
                <h3>Content Management</h3>
                <p>Oversee and update site content.</p>
            </div>
        </div>

        <div class="compound">
            <div class="text-content">
                <h1>Enhancing Community Engagement through Volunteer Management</h1>
                <p>Volunteering plays a pivotal role in fostering community engagement and social responsibility. The Volunteer Management Platform is designed to bridge the gap between enthusiastic individuals eager to contribute their time and skills, and organizations in need of such invaluable support. This website serves as a dynamic hub where organizations can effortlessly create and manage events, and volunteers can browse, select, and apply for opportunities that resonate with their passions and expertise. The admin dashboard is a crucial component of this ecosystem, providing administrators with a panoramic view of all ongoing activities. It enables efficient oversight and coordination, from the initial creation of events to the final acknowledgment of volunteer contributions. Through this dashboard, admins can manage user accounts, monitor the progress of events, and ensure that every aspect of the volunteer process runs seamlessly. By streamlining these operations, the platform not only enhances the user experience for both volunteers and organizations but also amplifies the impact of their collective efforts. Ultimately, the Volunteer Management Platform empowers communities by facilitating meaningful connections and fostering a culture of active participation and altruism.</p>
            </div>
            <div class="image-content">
                <img src="vounteer25.jpg" alt="Placeholder Image">
            </div>
        </div>
        

    <div class="footer">
             <div class="footer-col">
                <div class="footerNav">
                    <ul>
                        <li><a href="Home.html">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="Contact Us.html">Contact Us</a></li>              
                    </ul>
                    <ul>
                        <li><a href=""></a>Impact</li>
                        <li><a href="">Support</a></li>
                        <li><a href="Help and support.html">Help Center</a></li>               
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
