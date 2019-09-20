<?php
    include ('data/validation.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/style.css">
    <title>nobio</title>
</head>

<body>
    <div class="container">
        <!-- Left side -->
        <div id="sidebar-logo">
            <img src="dist/img/nobio-light.png" alt="light-image"/>
            
        </div>

        <!-- Right side -->
        <div id="sidebar-form">
            <!-- Logo for mobile and tablets views-->
    
            <img src="dist/img/nobio-dark.png" class="hide-on-large" alt="dark-image">
            
            <p>Hello there!</p>
            <p class="invite-txt">We're welcoming new members just now</p>
            <img src="dist/img/nobi-panda.png" class="panda" alt="panda">

            <!-- The sign up form -->
            <form id="form" action="index.php" method="POST" autocomplete="off">

                <?php include ("data/Errors.php"); ?>  
				
            	<div  class="input-div">
                    <span>Firstname</span>
                    <input type="text" name="firstname"/>
                </div>
                
                <div  class="input-div">
                    <span>Lastname</span>
                    <input type="text" name="lastname" />
                </div>
            
                <div  class="input-div">
                    <span>Email</span>
                    <input type="text" name="email"/>
                </div>

                <div class="input-div">
                    <span>Password</span>
                    <input type="password" name="password1"/>
                </div>
                
                <div  class="input-div">
                    <span>Confirm Password</span>
                    <input type="password" name="password2"/>
                </div>

                <div id="submit-section">
                    <!-- submit button -->
                    <input type="submit" value="Join us" name="submit"/>
                </div>
               
            </form>
            <p><a class="redirection" href="/login.php">Go to Login page</a></p> 
            <p class="team-name">Team Zenith</p>
        </div>
    </div>
</body>
</html>
