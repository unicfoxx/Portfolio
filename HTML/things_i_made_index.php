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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">
    <link rel="stylesheet" href="../CSS/stylesheet_index.css">
    <link rel="stylesheet" href="../CSS/codestyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <script>hljs.highlightAll();</script>
</head>
<body>
    <header>

        <!-- Title -->
        <div id="topbar">
            <a href="index.php">unicfoxx's Portfolio</a>
        </div>

        <!-- Page Navigation -->

        <div id="topbar-pagenav" class="nodsiplay2">
            <a href="#section1">Cpp Code</a>
            <a href="#section2">Js Code</a>
            <a href="#section3">Crow Song</a>
            <a href="#section4">Rock Paper Scissors</a>
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
                <div class="title" id="section1">C++ Code</div>

        <div class="page-style3" id="section1">
            <pre>
                <code class="language-cpp">
                    #include <iostream>
                        #include <string>
                        #include <thread>
                        #include <chrono>
                        using namespace std;
                        
                        int main()
                        {
                            int number1;
                            int number2;
                            int bankID;
                            string bankDetails;
                            string talkabout;
                            string notPlayingThat;
                            string stfu;
                            string opinion;
                            string difficulty;
                            char isALittleChild;
                            char wannaPlayAGame;
                            char operatr;
                        
                            cout << "***************************************" << endl;
                            cout << "*                                     *" << endl;
                            cout << "*    WELCOME TO THE CHAT VRO          *" << endl;
                            cout << "*         CALCULATOR                  *" << endl;
                            cout << "*                                     *" << endl;
                            cout << "***************************************" << endl;
                            cout << "© 2024 Vro and Associates. No rights reserved" << endl;
                            cout << endl;
                            cout << endl;
                            cout << "Hi, Vro \n Could u enter first number:";
                            cin >> number1;
                        
                            cout << "Enter the second number now pls:";
                            cin >> number2;
                        
                            cout << "U can also choose ur operator vro ( +,-,*,/):";
                            cin >> operatr;
                        
                            cout << "Thank you for submitting the numbers but.." << endl
                                 << "You'll have to do something in return if" << endl
                                 << "you want me to calculate your numbers." << endl;
                        
                            cout << "Enter bank ID:" << endl;
                            cin >> bankID;
                        
                            cin.ignore();
                        
                            cout << "Enter other bank details (login info, etc):" << endl;
                            getline(cin, bankDetails);
                        
                            cout << "Thank you for supporting us!\n";
                            if (operatr == '+')
                            {
                                cout << "here is the calculated number:" << number1 + number2 << endl;
                            }
                            else if (operatr == '-')
                            {
                                cout << "here is the calculated number:" << number1 - number2 << endl;
                            }
                            else if (operatr == '*')
                            {
                                cout << "here is the calculated number:" << number1 * number2 << endl;
                            }
                            else if (operatr == '/')
                            {
                                cout << "here is the calculated number:" << number1 / number2 << endl;
                            }
                        
                            this_thread::sleep_for(chrono::seconds(7));
                        
                            cout << "Btw do you like prime and skibidi toilet? (yes[y] no[n]):" << endl;
                            cin >> isALittleChild;
                        
                            if (isALittleChild == 'y')
                            {
                                cout << "Get tf outta here kid, \n this discord shit is serious";
                                return 0;
                            }
                            else if (isALittleChild == 'n')
                            {
                                cout << "Okay vro, you passed the prime test" << endl;
                            }
                            else
                            {
                                cout << "ERROR \n Input not valid";
                                return 1;
                            }
                        
                            cin.ignore();
                        
                            cout << "the kids are gone, now it's just me and you vro ♥ \n so what u wanna talk about?:";
                            getline(cin, talkabout);
                        
                            cout << "oh so you wanna yapp about " << talkabout << "\n well I dunno about dat.. \n how about we play a game, \n you in? (yes[y] no[n]):";
                            cin >> wannaPlayAGame;
                        
                            if (wannaPlayAGame == 'y')
                            {
                        
                                cout << "yayy, let's hab funnies \n so what game do u wanna play?:";
                                cin >> notPlayingThat;
                        
                                cout << "hmm, well that does sound like a good game vro, \n but I don't have " << notPlayingThat << "\n Ig we'll just have to play my game:";
                                getline(cin, stfu);
                        
                                cout << "did I ask for your opinion b??:";
                                getline(cin, opinion);
                                
                                this_thread::sleep_for(chrono::seconds(2));
                                cout << "sorry vro, I'm a lil angy today," << endl;
                                this_thread::sleep_for(chrono::seconds(2));
                                cout << "let's just play the game" << endl;
                                cout << "***************************************" << endl;
                                cout << "*                                     *" << endl;
                                cout << "*      WELCOME TO THE GUESS THE       *" << endl;
                                cout << "*           NUMBER GAME               *" << endl;
                                cout << "*                                     *" << endl;
                                cout << "***************************************" << endl;
                                cout << "© 2024 Vro and Associates. No rights reserved" << endl;
                                cout << endl;
                                cout << endl;
                                cout << "vro, you need to choose a difficulty, cro just chose a difficulty (easy, medium, hard, NIGHTMARE):";
                                cin >> difficulty;
                        
                                if (difficulty == "easy")
                                {
                        
                                    cout << "Game Dificulty set (easy) = 30 numbers " << endl;
                        
                                    srand(time(0));
                                    int guessnumber = 1 + (rand() % 30);
                                    int playercin;
                                    int choices = 10;
                                    for (int i = 10; i > 0; i--)
                                    {
                        
                                        cout << "choices = " << i << endl;
                                        cout << "guess the number:" << endl;
                                        cin >> playercin;
                        
                                        if (playercin == guessnumber)
                                        {
                                            cout << "YAY, u won cro! ♥";
                                            break;
                                        }
                                        else
                                        {
                                            cout << "aw, " << playercin << " is da wrong number vro..." << endl;
                                            cout << "Choices Left: " << choices-- << endl;
                                            cout << "guess again cro:" << endl;
                                        }
                                        if (choices == 0)
                                        {
                                            cout << "sorry vro, u lost the game. Better luck next time ♥";
                                        }
                                    }
                                } else if (difficulty == "medium") {
                                cout << "Game Dificulty set (medium)";
                        
                                srand(time(0));
                                int guessnumber = 1 + (rand() % 100);
                                int playercin;
                                int choices = 7;
                                for (int i = 7; i > 1; i--)
                                {
                        
                                    cout << "choices = " << i;
                                    cout << "guess the number:" << endl;
                                    cin >> playercin;
                        
                                    if (playercin == guessnumber)
                                    {
                                        cout << "YAY, u won cro! ♥";
                                        break;
                                    }
                                    else
                                    {
                                        cout << "aw," << playercin << " is da wrong number vro..."
                                                                      "Choices Left:"
                                             << choices--;
                                    }
                                    if (choices == 0)
                                    {
                                        cout << "sorry vro, u lost the game. Better luck next time ♥";
                                    }
                                }
                                } else if (difficulty == "hard") {
                                    cout << "Game Dificulty set (hard)";
                        
                                srand(time(0));
                                int guessnumber = 1 + (rand() % 300);
                                int playercin;
                                int choices = 5;
                                for (int i = 5; i > 1; i--)
                                {
                        
                                    cout << "choices = " << i;
                                    cout << "guess the number:" << endl;
                                    cin >> playercin;
                        
                                    if (playercin == guessnumber)
                                    {
                                        cout << "YAY, u won cro! ♥";
                                        break;
                                    }
                                    else
                                    {
                                        cout << "aw," << playercin << " is da wrong number vro..."
                                                                      "Choices Left:"
                                             << choices--;
                                    }
                                    if (choices == 0)
                                    {
                                        cout << "sorry vro, u lost the game. Better luck next time ♥";
                                    }
                                }
                            } else if (difficulty == "NIGHTMARE") {
                        
                                cout << "Game Dificulty set (NIGHTMARE)";
                        
                                srand(time(0));
                                int guessnumber = 1 + (rand() % 1000);
                                int playercin;
                                int choices = 1;
                                for (int i = 1; i > 1; i--)
                                {
                        
                                    cout << "choices = " << i;
                                    cout << "guess the number:" << endl;
                                    cin >> playercin;
                        
                                    if (playercin == guessnumber)
                                    {
                                        cout << "YAY, u won cro! ♥";
                                        break;
                                    }
                                    else
                                    {
                                        cout << "aw," << playercin << " is da wrong number vro..."
                                                                      "Choices Left:"
                                             << choices--;
                                    }
                                    if (choices == 0)
                                    {
                                        cout << "sorry vro, u lost the game. Better luck next time ♥";
                                    }
                                }
                            } else {
                                cout << "ERROR \n Input not valid";
                                return 1;
                            }
                        }
                        else if (wannaPlayAGame == 'n')
                        {
                            cout << "okay, fuck u too ig.";
                        }
                        else
                        {
                            cout << "ERROR \n Input not valid";
                            return 1;
                        }
                        
                        return 0;
                        }
                </code>
            </pre>
        </div>
        <div class="title" id="section2">JavaScript Code</div>

        <div class="page-style3" id="section2">
            <pre>
                <code class="language-javascript">
// FizzBuzz
for (let i = 1; i <= 50; i++) { 
    // Increases the value of i with 1 each time until it reaches 50
    let fizz = false;
    let buzz = false;

    if (i % 3 === 0) { 
        // Checks if the value i can be divided by 3 and be a whole number
        console.log("Fizz");
        fizz = true;
    } 

    if (i % 5 === 0) {
        console.log("Buzz");
        buzz = true;
    }

    if (fizz && buzz == true) {
        console.log("FizzBuzz");
    }
}

// Calculator
const operator = prompt("CALCULATOR \n Input operator [*, /, +, -] : \n");
const number1 = prompt("Input first number: \n");
const number2 = prompt("Input second number: \n");

// The $ sign allows you to put the variables in the string
if (operator == '*') {
    console.log(`${number1} multiplied by ${number2} = ${number1 * number2}`);
} else if (operator == '/') {
    console.log(`${number1} divided by ${number2} = ${number1 / number2}`);
} else if (operator == '+') {
    console.log(`${number1} plus ${number2} = ${number1 + number2}`);
} else if (operator == '-') {
    console.log(`${number1} minus ${number2} = ${number1 - number2}`);
} else {
    console.log("ERROR: operator input not valid!");
}

// Reverse String
let input = prompt("Input string: \n");
let reversedinput = input.split('').reverse().join(''); 
// Split turns the string into an array, reverse turns the array around, and join merges the array into a string
console.log(reversedinput);

// Merge Array
let inputList = prompt("Input list: \n");

// Multiplication
let input = prompt("Input a number from 1 to 10: \n");
for (let i = 1; i <= 10; i++) {
    console.log(input * i);
}

// Multiplication part 2
for (let i = 1; i <= 10; i++) {
    console.log(1 * i);
}
for (let i = 1; i <= 10; i++) {
    console.log(2 * i);
}
for (let i = 1; i <= 10; i++) {
    console.log(3 * i);
}
for (let i = 1; i <= 10; i++) {
    console.log(4 * i);
}
for (let i = 1; i <= 10; i++) {
    console.log(5 * i);
}
for (let i = 1; i <= 10; i++) {
    console.log(6 * i);
}
for (let i = 1; i <= 10; i++) {
    console.log(7 * i);
}
for (let i = 1; i <= 10; i++) {
    console.log(8 * i);
}
for (let i = 1; i <= 10; i++) {
    console.log(9 * i);
}
for (let i = 1; i <= 10; i++) {
    console.log(10 * i);
}

// Multiplication part 2 alternative
for (let i = 1; i <= 10; i++) { 
    console.log(`The times table for ${i} is:`); 
    for (let j = 1; j <= 10; j++) {   
        console.log(`${i} x ${j} = ${i * j}`);  
    }   
    console.log();  
}

                </code>
            </pre>
        </div>
        <div class="title" id="section3">Crow Song (My first JS)</div>

        <div class="page-style3" id="section3">
            <script>
                function playvideo() {
                    var video = document.getElementById("clickyme");
                    video.play();
                }
            
                function removebuttonpaper() {
                    var overlay = document.getElementById('buttonpaper');
                    overlay.style.display = 'none';
                    var click = document.getElementById('clickyme');
                    click.style.display = 'block';
                }
            </script>
            
            <style>
                #buttonpaper {
                    background-color: rgb(255, 53, 130);
                    color: rgb(255, 255, 255);
                    display: flex;
                    height: 32vw;
                    justify-content: center;
                    align-items: center;
                    z-index: 3;
                }
            
                .button {
                    background-color: #000000;
                    font-family: 'Bangers';
                    color: rgb(255, 255, 255);
                    padding: 15px 30px;
                    font-size: 45px;
                    border: none;
                    border-radius: 10px;
                    cursor: pointer;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    transition: background-color 0.3s ease;
                }
            
                #clickyme {
                    display: none;
                }
            </style>
            
            <div id="buttonpaper">
                <button class="button" onclick="playvideo(); removebuttonpaper();">Clicky Me!</button>
            </div>
            
            <video width="auto" height="100%" id="clickyme">
                <source src="../Images/Crow Song.mp4" type="video/mp4">
                change browser nerd!
            </video>
            
        </div>
        <div class="title" id="section4">Rock Paper Scissor</div>

        <div class="page-style3" id="section4">
            
            <div class="choices"> 
                <button onclick="startGame('rock')"><img src="../Images/Stone.png"></button>
                <button onclick="startGame('paper')"><img src="../Images/Paper.png"></button>
                <button onclick="startGame('scissor')"><img src="../Images/Scissor.png"></button>
              </div>
              
              <div class="backgroundDisplay">
                <div id="Playergi">Your choice: </div> 
                <div id="Scriptgi">Bot's choice: </div> 
              </div>
              
              <div class="scoreDisplay">Your Score:
                <span id="playerScoreDisplay">0</span>
              </div>
              <div class="scoreDisplay">Bot's Score:
                <span id="computerScoreDisplay">0</span>
              </div>
              
              <div id="resultDisplay"></div>
            </div>
        </div>

    </main>
    <footer>
        <div id="footer">
            <li><a href="log_index.php">Log</a></li>
            <li><a href="https://github.com/unicfoxx/unicfoxx">About</a></li>
            <li><a href="silly_index.php">Silly</a></li>
            <li><a href="https://docs.google.com/document/d/1JAkxS2qxKnMVmIkHYRpSrzTj1HalCjslmqcnvnvsXSg/edit?tab=t.0">Documentation</a></li>
            <!-- "Copyright" -->
            <hr>
            <small>&copy; Copyright 2024 unicfoxx. No rights reserved.</small>
        </div>
    </footer>
    <script src="../JS/RPS.js" defer></script>  
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



