<?php
session_start();
include('include/db.inc.php');

if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="CSS/stylesheet_index.css">
</head>
<body>
    <header>

        <!-- Title -->
        <div id="topbar">
            <a href="index.php">unicfoxx's Portfolio</a>
        </div>

        <!-- Page Navigation -->
        <div id="topbar-pagenav">
            <a href="#section1">General info</a> |
            <a href="#section2">My cat</a> |
            <a href="#section3">My hobby</a> |
            <a href="#section4">My career</a>
        </div>
		
		<!-- Isak was here 26.03.25 13:02 -->
        
        <!-- Side Navigation -->
        <img id="nav-button" src="Images/menu_icon.png">
            
        <aside id="sidenav" class="nodisplay">
            <div class="sidemenu-buttons">
                <a href="HTML/websites_index.php">My Websites</a>
                <a href="HTML/about_index.php">Silly Things About Me</a>
                <a href="HTML/things_i_made_index.php">Silly Things I Made</a>
                <a href="HTML/silly_index.php" title="silly easter egg">Hey Click This!</a>
                <a href="HTML/log_index.php">Website Log</a>
            </div>

            <!-- Social Links-->
            <div class="social-links">
                <a target="_blank" href="https://github.com/unicfoxx" title="https://github.com/unicfoxx"><img src="Images/github_icon.png"></a>
                <a target="_blank" href="https://open.spotify.com/user/xwgca22n05kb3vcty45a87olr?si=c8ab77e03de443d4" title="https://open.spotify.com/user/xwgca22n05kb3vcty45a87olr?si=c8ab77e03de443d4"><img src="Images/spotify_icon.png"></a>
            </div>
        </aside>
        
        <!-- Side Settings -->
        <img id="set-button" src="Images/settings_icon.png">
        
        <aside id="sideset" class="nodisplay">
		<div class="wip">
		<p>WIP</p>
		</div>
		<!--
            <div class="sidemenu-buttons">
                <p onclick=lightmodeToggle() title="Makes everything bright (made specifically for Isak Brun Henriksen)">Light Mode</p>
                <p onclick=grandmamodeToggle() title="Makes everything bigger">Grandma Mode</p>
            </div>
		-->
        </aside>
		
		<!-- User Profile -->
		<img id="profile-picture-button" onclick=profilebutton() src="uploads/<?php echo htmlspecialchars($_SESSION['profilepicture']); ?>" alt="Profilepicture" width="30px">
		
        <aside id="profile-page">
            <img width="100px" id="profile-picture" src="uploads/<?php echo htmlspecialchars($_SESSION['profilepicture']); ?>" alt="Profilbilde">
            <h2><?php echo $_SESSION["username"]?></h2>
            <a class="login-button" href="profile.php">Profile</a>
            <a class="login-button" href="login.php">Log in</a>
            <a class="login-button" href="register.php">Sign in</a>
        </aside>
    
    </header>
    <main>
                <!-- Text Pages -->

        <!-- Section 1 -->
        <div class="title" id="section1">Silly Things About Me</div>

        <div class="page-style1" id="section1">
            <p>
                <a target="_blank" href="https://youtu.be/sNPnbI1arSE?si=FVbW1swefb_H18JK&t=9" title="youtube music video">Hi, my name is</a> 
                unicfoxx, I come from Norway, Bergen. 
                I'm currently 16 years old and attend Amalie Skram VGS IM.
                Some things I enjoy include music, cats, gaming, IT, media, anime, guitar, drums, and more.
                At school, I'm learning about coding in HTML, CSS, and JavaScript.
                I'm also studying media, though I’m largely self-taught in areas like Adobe tools, camera operation, and similar skills. 
                &#40;I'm not using my real name for privacy reasons&#41;
            </p>
            <img src="../Images/cat1.png" alt="cat image">
        </div>

        <!-- Section 2 -->
        <div class="title" id="section2">My silly cat</div>
        
        <div class="page-style1" id="section2">
            <img src="../Images/cat2.png" alt="cat image 2">
            <p>My cat is very cute; she's about 1 year old, I think (I'm not keeping track, hehe), and she's also of the Siberian breed.
                The reason we got such an expensive breed is partly because of how pretty it is, but also because my stepdad is allergic to "regular" cats.
                My cat sleeps with me almost every night and loves me very much.
                My cat is the closest I have in this world because I know that she'll always be there, no matter what is going on in the human world.
            </p>
        </div>

        <!-- Section 3 -->
        <div class="title" id="section3">My love for music</div>

        <div class="page-style1" id="section3">
            <p>I love music very much; I both listen to it and play it.
                I first started enjoying music in 5th grade of elementary school.
                I was chosen to play the drums, and I quickly fell in love with it.
                Later, in middle school, I picked up an electric guitar and realized how fun it was to play.
                Now, I play both guitar and drums all the time.
                The genre I play and listen to the most is rock, and my favorite artists include 
                <a target="_blank" href="https://youtu.be/jW8UlrtcEac?si=OdazU8AqaTvMdrff&t=5" title="youtube music video">the white stripes</a>, <a target="_blank" href="https://youtu.be/KKSmHOUaqaQ?si=LgjVPO2P2zsZtTnd&t=87" title="youtube music video">the black keys</a>, <a target="_blank" href="https://youtu.be/r_9Kf0D5BTs?si=V1nxZBxN8Z7gz6_W&t=3" title="youtube music video">twenty one pilots and more</a>.
                <a target="_blank" href="https://open.spotify.com/playlist/3z7r2ljyWHDUadbls7Tong?si=8d7f3f5fee65407f" title="spotify playlist">This is a link to my rock playlist.</a>
                
            </p>
            <img src="../Images/concert.png" alt="concert image">
        </div>

        <!-- Section 4 -->
        <div class="title" id="section4">My love for IT and Media</div>

        <div class="page-style1" id="section4">
            <img src="../Images/pc.png" alt="pc image">
            <p> IT and media &#40;IM&#41; is a big part of my life; it's my hobby and future career.
                I think my interest in IM started with gaming. I became interested in game development and started trying to code in middle school.
                In the second year of middle school, all my friends wanted to sign up for Media because they heard it was really easy, so of course, I signed up as well.
                When I signed up, I expected to breeze through the classes, but I ended up getting really into it. My friends and I started making full movies during sleepovers.
                I also know a lot about Adobe tools, which I got interested in because my dad gave me access to his Adobe Creative Cloud.
                I've made many projects and became pretty decent at Photoshop. I've also built and unpgraded PC's.
            </p>
        </div>
        </div>   
    </main>
	<footer>
        <div id="footer">
            <li><a target="_blank" href="log_index.php">Log</a></li>
            <li><a target="_blank" href="https://github.com/unicfoxx/unicfoxx">About</a></li>
            <li><a target="_blank" href="silly_index.php">Silly</a></li>
            <li><a target="_blank" href="https://docs.google.com/document/d/1JAkxS2qxKnMVmIkHYRpSrzTj1HalCjslmqcnvnvsXSg/edit?tab=t.0">Documentation</a></li>
            <!-- "Copyright" -->
            <hr>
            <small>&copy; Copyright 2025 unicfoxx. No rights reserved.</small>
        </div>
    </footer>
    <script src="/JS/Cookies.js"></script>
    <script src="/JS/Menus.js"></script>
    <script src="/JS/Profile.js"></script>
</body>
</html>



