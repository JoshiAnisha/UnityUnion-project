<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="Content manage.css">
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
        <h1>Content Management</h1>
        
        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" id="search" placeholder="Search content...">
        </div>

        <!-- Content Table -->
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Data -->
                <tr>
                    <td>1</td>
                    <td>Understanding CSS Grid</td>
                    <td>John Doe</td>
                    <td>2024-06-19</td>
                    <td><span class="status published">Published</span></td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Introduction to JavaScript</td>
                    <td>Jane Smith</td>
                    <td>2024-06-18</td>
                    <td><span class="status draft">Draft</span></td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>

        <h2>Add Event</h2>
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
                    <label for="event-date">Date:</label>
                    <input type="date" id="event-date" name="event-date" required>
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
    </body>
</html>
