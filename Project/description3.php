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
        <h1>Power of planting tree</h1>
        <p>Reflecting on my own experiences with volunteering, I've come to appreciate the profound impact it has had on my life. Engaging in community service has not only allowed me to contribute to meaningful causes but also helped me grow personally. Each interaction and task taught me valuable lessons in empathy, patience, and resilience. Volunteering introduced me to diverse perspectives, broadening my understanding of the world and the challenges faced by different communities. It provided a sense of belonging and purpose, reaffirming the importance of compassion and collective effort. Through volunteering, I have learned that giving back is not just about helping others; it is also about enriching one's own life in unexpected and transformative ways.</p>
        <p>Volunteering to plant trees is an essential endeavor that addresses urgent environmental concerns while fostering community engagement and well-being. Trees play a crucial role in mitigating climate change by absorbing carbon dioxide, reducing air pollution, and stabilizing local climates. By participating in tree planting initiatives, volunteers directly contribute to the preservation and restoration of ecosystems, enhancing biodiversity and creating green spaces that benefit both people and wildlife. Moreover, tree planting activities provide a tangible opportunity for individuals to connect with nature, fostering a deeper appreciation for the environment and promoting physical and mental well-being. Engaging in such initiatives not only improves the immediate surroundings but also leaves a lasting legacy for future generations to enjoy.</p>
        <p>Additionally, volunteering to plant trees promotes social cohesion and collective action towards environmental sustainability. Tree planting events often bring together people from diverse backgrounds, fostering a sense of community and shared purpose. Through collaborative efforts, volunteers not only beautify public spaces but also build resilience against environmental challenges such as urban heat islands and soil erosion. Beyond the environmental benefits, tree planting volunteering instills a sense of pride and ownership in local communities, empowering individuals to take ownership of their surroundings and work towards a greener, more sustainable future.
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