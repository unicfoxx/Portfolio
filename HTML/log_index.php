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
                <!-- Log -->
        <div class="page-style2" id="section1">
            <div class="txt1" id="11/24">
                Log Entry: 11/21/24
            </div>
            <div class="txt2">
                <p>
                    A responsive layout using Flexbox was created with two boxes, .txt1 and .txt2. These boxes are displayed side-by-side and will wrap to the next line when the screen size is reduced. The text inside each box is centered both vertically and horizontally. Padding is applied only to the text inside .txt2 to create space around the content without affecting the size of the boxes. The layout is adaptable and works across different screen sizes.
                </p>
            </div>
            <div class="txt2">            
                <p>
                    No changes made. Used the two school hours to troubleshoot an ongoing issue with the pagenav not moving on hover.
                </p>
            </div>
            <div class="txt1">
                Log Entry: 11/27/24 
            </div>
            <div class="txt1">
                Log Entry: 11/28/24
            </div>
            <div class="txt2">
                <p>
                    Added footer with color gradient. Added footer line. Added copyright text in footer. Added titles on grandma mode and light mode. JS issue has not been fixed.
                </p>
            </div>
            <div class="txt2">
                <p>
                    Updated footer, fixed copyright text, tried to add title in top left corner, an issue appeared with the title pushing down the links, trying to resolve issue by splitting the footer into two parts. Continiued troubleshooting pagenavigation drop down issue, issue has not been resolved. 
                </p>
            </div>
            <div class="txt1" id="12/24">
                Log Entry: 12/2/24
            </div>
            <div class="txt1">
                Log Entry: 12/3/24
            </div>
            <div class="txt2">
                <p>
                    Started on updating the silly things I made html, plan is to use page style 1 and be able to scroll to see the thing i've made like a piece of code for example. Added a longer slowdown when grandma mode is selected, ran in to a new error where the side settings wont stay open on hover, I will fix the issue in the next update. 
                </p>
            </div>
            <div class="txt2">
                <p>
                    Finally fixed pagenav drop down on hover simply by adding !important to the display: none class, it now drops down on hover, but does not display none by default, reason is unknown. Did not resolve settings menu issue. Added a universal fade transition on all links. A new issue is that the text can be selected by the viewer. Not as much was done in these school hours as I am currently working on a website side project.
                </p>
            </div>
            <div class="txt1">
                Log Entry: 12/6/24
            </div>
            <div class="txt1">
                Log Entry: 12/9/24
            </div>
            <div class="txt2">
                <p>
                    Fixed settings menu, issue was resolved by removing a extra piece of code that I missed while adding a longer slowmode to grandma mode. Finished making the things I made style where you can now scroll down on each section viewing code. I also added a external css and js to display colors and code format. Made it so that everytime you enter a side menu the page nav closes right away. Added a margin to the Log, would have made a margin sooner, but went into an issue where the margin was also added to the title boxes. The margin issue was easily fixed by adding paragraphs and then the margin to them. Added crow song to the silly things I made page.
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



