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
            <li><a href="Applications.php"><i class="fa-solid fa-file"></i>Applications</a></li>
            <li><a href="Portfolio.php"> <i class="fa-solid fa-folder-open"></i>Portfolio</a></li>
            <li><a href="Feedback.php"> <i class="fa-solid fa-comments"></i>Feedback</a> </li>
            <li><a href="Help and support.php"> <i class="fa-solid fa-circle-info"></i>Help and support</a></li>
            <li><a href="Settings.php"> <i class="fa-solid fa-gear"></i>Settings</a></li>
        </ul>
    </div>
    <div class="container">
        <!-- Main content goes here -->
        <h1>Organize to donate food</h1>
        <p>Organizing food donation volunteering events serves as a critical response to the pervasive issue of food insecurity within communities. These events are pivotal in ensuring that individuals and families facing economic hardship have access to nutritious food. By coordinating donations from local businesses, community members, and organizations, these initiatives efficiently redistribute surplus food that would otherwise be wasted. This not only addresses immediate hunger but also promotes sustainability by reducing food waste, which is beneficial for environmental conservation efforts.</p>
        <p>Beyond the tangible provision of food, these events cultivate a sense of community spirit and social cohesion. Volunteers from various backgrounds come together, united by a common goal to support their neighbors in need. This collective effort not only strengthens community bonds but also fosters empathy and understanding about the challenges faced by individuals experiencing food insecurity.</p>
        <p>Education about food security issues is another significant outcome of food donation events. Through outreach and awareness campaigns, organizers and volunteers inform the public about the prevalence and impacts of food insecurity, as well as the underlying causes. This awareness not only inspires compassion but also encourages ongoing efforts to address systemic issues contributing to hunger.</p>
        <p>Participating in food donation volunteering events also promotes volunteerism and civic engagement within the community. Individuals contribute their time and resources to make a tangible difference in the lives of others, reinforcing a culture of giving back and supporting those in need. Moreover, these events provide vital support to local food banks, shelters, and non-profit organizations that rely on community donations to sustain their operations and provide essential services.</p>
        <p>From a public health perspective, ensuring access to nutritious food through food donation events improves overall well-being and quality of life for recipients. Adequate nutrition is essential for physical health, cognitive development, and overall productivity, particularly for vulnerable populations such as children and the elderly.</p>
        <p>Ultimately, organizing food donation volunteering events creates a profound social impact by addressing immediate hunger needs, fostering community resilience, and empowering individuals to contribute positively to their communities. By coming together to support food security initiatives, communities build stronger, more inclusive environments where everyone has the opportunity to thrive.</p>
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