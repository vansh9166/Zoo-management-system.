<?php
    session_start();
?>

<html>
<head>
    <title>Zoo Management</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head> 
<body>
    <header>
        
    <div class="row">
        <div class="logo">
            <img src="logo.png">
        </div>
            
        <ul class="main-nav">  
            <li><a href="index.php">  HOME </a></li>

        <?php 
                if(isset($_SESSION["fnm"])) { 
                echo '<li><a href="menu/zooav.html" > MENU </a></li>';

                echo '<li><a href="services/ser.html"> SERVICES </a></li>';
                echo '<li><a href="info/animalav.html"> INFO </a></li>';
                echo '<li><a href="about/abt.html"> ABOUT </a></li>';

            
                echo '<li><a href="logout.php">LOG OUT</a></li>';
                } 
            ?>
        </ul>    
        
    </div>
        
    <div class="hero">
        <h1>Welcome To The World Of Animals</h1>

        <?php if (!isset($_SESSION["fnm"])) {
            echo '<div id="mainForm" class="">
                   <form action="back/login.php" method="POST" class="hcenter" id="">
                
                    <div class="inform hide" id="toggleMe">
                        <label for="email" id="change-pos1" class="email">Email</label>
                        <input type="text" name="email" id="on-hover-change-pos1" required>
                        <br>
                        <label for="pwd" class="toggle" id="change-pos2">Password</label>
                        <input type="password" name="pwd" id="on-hover-change-pos2" required>
                    </div>
                    <div class="button">
                        <a href="signup/signup.php" class="btn btn-one" id="signup">Sign In</a>
                        <input type="submit" name="submit" value="Log In" class="btn btn-two" id="toggle">   
                    </div>    
                </form>
            </div>';
        }
        ?>
    </div>

    
    </header>

    <script src="event4login.js"></script>
        
</body>    
</html>
