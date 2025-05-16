<?php
session_start();
include('include/db.inc.php');

if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

$defaultImage = '/uploads/default.jpg';
$profilePicture = !empty($_SESSION['profilepicture']) ? 'uploads/' . htmlspecialchars($_SESSION['profilepicture']) : $defaultImage;
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
		<img id="profile-picture-button" onclick=profilebutton() src="<?php echo $profilePicture; ?>" alt="Profilepicture" height="27px" width="27px">
		
        <aside id="profile-page">
            <img width="100px" height="100px" id="profile-picture" src="<?php echo $profilePicture; ?>" alt="Profile-picture">
            <h2><?php echo $_SESSION["username"]?></h2>
            <a class="login-button" href="profile.php">Profile</a>
            <a class="login-button" href="login.php">Log in</a>
            <a class="login-button" href="register.php">Sign in</a>
        </aside>
    
    </header>
    <main>
        <div id="hi">hi.</div>    
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
    <script src="https://giscus.app/client.js"
        data-repo="[ENTER REPO HERE]"
        data-repo-id="[ENTER REPO ID HERE]"
        data-category="[ENTER CATEGORY NAME HERE]"
        data-category-id="[ENTER CATEGORY ID HERE]"
        data-mapping="pathname"
        data-strict="0"
        data-reactions-enabled="1"
        data-emit-metadata="0"
        data-input-position="bottom"
        data-theme="preferred_color_scheme"
        data-lang="en"
        crossorigin="anonymous"
        async>
    </script>
</body>
</html>



