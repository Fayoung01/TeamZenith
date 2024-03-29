<?php
    include ('validation.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../dist/css/style.css">
    <title>nobio</title>
</head>
<body>
    <div class="container">
        <!-- Left side -->
        <div id="sidebar-logo">
            <img src="../dist/img/nobio-light.png" alt="light-image"/>
            
        </div>

        <!-- Right side -->
        <div id="sidebar-form">
            <!-- Logo for mobile and tablets -->
    
            <img src="../dist/img/nobio-dark.png" class="hide-on-large" alt="dark-image">
            
            <p>Hello there!</p>
            <img src="../dist/img/nobi-panda.png" alt="nobio-panda" class="panda">
            <p class="invite-txt">Login</p>

            <!-- The login form -->
            <form id="form" action="login.php" method="POST" autocomplete="off">

                <?php include ("Errors.php"); ?>  
            
                <div  class="input-div">
                    <span>Email</span>
                    <input type="email" name="email" />
                </div>

                <div class="input-div">
                    <span>Password</span>
                    <input type="password" name="password"/>
                </div>

                <div id="submit-section">
                    <!-- submit button -->
                    <input type="submit" value="Login" name="login"/>
                </div>
            </form> 
            <p class="team-name">Team Zenith</p>
        </div>
    </div>
</body>
</html>
