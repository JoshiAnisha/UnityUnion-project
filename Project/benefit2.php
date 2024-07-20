<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        a {
            text-decoration: none;
            color: #000;
        }
        
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        /* Header */
        .header {
            background-color: #4b6cb7;
            width: 100%;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .nav {
            display: flex;
            align-items: center;
            width: 100%;
            height: 75px;
        }
        
        .brand-name {
            font-size: 30px;
          font-weight: bold;
          color: aliceblue;
          letter-spacing: 1.5px;
          cursor: pointer;
        
        }
        
        .search {
            margin-left: 100px;
            display: flex;
        }
        
        .search input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            outline: none;
        }
        
        .search button {
            padding: 10px;
            border: none;
            background-color: #fff;
            color: black;
            cursor: pointer;
            border-radius: 0 4px 4px 0;
        }
        
        .user {
            position: relative;
        }
        
        .profile-picture-label {
            margin-left: 900px;
            display: flex;
            cursor: pointer;
        }
        
        .profile-picture-label i {
            font-size: 25px;
        }
        /* Side Menu */
        .side-menu {
            position: fixed;
            width: 250px;
            height: calc(100vh - 75px); /* Adjust height to fit below the header */
            background-color:#fff;
            top: 75px; /* Adjust this value to match the height of the header */
            left: 0;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .side-menu ul {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        .side-menu li {
            padding: 20px 25px;
            color: black;
            display: flex;
            align-items: flex-start;
            flex: 3; /* take up equal space */
            margin-top: 30px;
            font-size: 16px;
        }
        
        .side-menu li i {
            font-size: 22px;
            margin-right: 20px;
        }
        
        .side-menu li:hover {
            background:  #e0f0ff;
            border-radius: 7px;
        }
        
    .container {
        width: calc(100%-250px);
        margin-left: 250px;
        overflow: hidden;
        padding: 2rem;
        background: white;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        margin-top: 150px;
    }
    h1 {
        text-align: center;
        color: #5c6bc0;
    }
    p {
        margin: 1.5rem 0;
        padding: 0 1rem;
        font-size: 1.1rem;
        text-align: justify;
        transition: all 0.3s ease-in-out;
    }
    p:hover {
        background: #f0f4f8;
        border-left: 5px solid #5c6bc0;
        padding-left: 1.5rem;
    }
    @media(max-width: 768px) {
        .container {
            width: 90%;
            padding: 1rem;
        }
        p {
            font-size: 1rem;
        }
    }
    .footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        position: relative;
        width:100%;
        margin-left:0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    
    .footer-col {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
    }
    
    .footerNav ul {
        display: flex;
        flex-wrap: wrap;
        gap: 30px; /* Increased gap for better spacing */
        padding-right: 90px; /* Added padding to move list to the right */
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
        list-style: none; /* Remove default list style */
    }
    
    .footerNav ul li {
        flex: 1 1 calc(33.33% - 30px); /* Adjusted based on new gap */
        margin: 0;
        padding: 0;
        min-width: 80px;
    }
    
    .footerNav ul li a {
        color: #fff;
        text-decoration: none;
        white-space: nowrap;
    }
    
    .footerBottom {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-top: 20px;
        width: 100%;
    }
    
    .socialIcons {
        margin-bottom: 10px; /* Add margin to separate from text */
    }
    
    .socialIcons a {
        margin-right: 10px;
        color: #fff;
        text-decoration: none;
    }
    
    .socialIcons a i {
        font-size: 1.6em;
        color: white;
        opacity: 0.9;
    }
    
    .socialIcons a:hover {
        background-color: white;
        transition: 0.5s;
        border-radius: 50%;
    }
    
    .socialIcons a:hover i {
        color: black;
        transition: 0.5s;
    }
</style>
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
        <h1>Volunteering in Natural Disaster</h1>
        <p>Volunteering in natural disaster situations is a critical and noble endeavor that significantly impacts both the affected communities and the volunteers themselves. In the immediate aftermath of natural disasters such as hurricanes, earthquakes, floods, or wildfires, the need for swift and effective response is paramount. Volunteers play a crucial role in providing emergency relief, which includes distributing food, water, and medical supplies, setting up temporary shelters, and offering emotional support to those who have lost their homes and loved ones. Their presence and assistance can mean the difference between life and death for many survivors, ensuring that basic needs are met and that the most vulnerable receive the care they require. The dedication and resilience shown by these volunteers often inspire hope and bring a sense of solidarity to devastated communities.</p>
        <p>Beyond the immediate response, volunteers are essential in the longer-term recovery and rebuilding process. This phase involves restoring infrastructure, rebuilding homes, and helping to reestablish community services and local economies. Volunteers with diverse skill sets, such as construction, healthcare, education, and mental health support, contribute to creating a comprehensive recovery plan tailored to the specific needs of the affected area. They assist in clearing debris, repairing homes, and rebuilding schools and clinics, thus enabling communities to regain a semblance of normalcy. Additionally, volunteers often engage in training and capacity-building activities, helping local populations develop the skills and knowledge necessary to enhance their resilience against future disasters. This sustainable approach not only addresses the immediate aftermath but also strengthens the community's ability to cope with and recover from potential future disasters.</p>
        <p>The act of volunteering in natural disaster scenarios also profoundly impacts the volunteers themselves. It fosters a deep sense of empathy, humility, and global citizenship as individuals from diverse backgrounds come together to support those in need. The experiences gained through such volunteer work can be life-changing, providing valuable lessons in teamwork, leadership, and crisis management. Volunteers often develop a heightened awareness of global issues and the interconnectedness of communities worldwide. Moreover, the bonds formed with fellow volunteers and disaster survivors create lasting memories and friendships, reinforcing the importance of solidarity and collective action in times of crisis. Overall, volunteering in natural disasters is a powerful testament to human compassion and the enduring spirit of generosity, making a tangible difference in the lives of those affected while enriching the lives of the volunteers themselves.</p>
        
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