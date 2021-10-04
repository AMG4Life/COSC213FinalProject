<?php
session_start();

// destroy the session
session_destroy();
?>
<html>
    <head>
        <title>Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="pageStyle.css">
    </head>
    <body>

        <div class="menu">
            <a href="home.php" >Home</a>
        </div>
        <br>
        <div class="content">
            <br>
            <h2>Welcome to my COSC 213 project site!</h2>
            <br>
            <p>Please login to access the site content.</p>
            <form method="post" action="login/userlogin.php" style="margin: 0 auto; width:350px;color: black">
                <fieldset> <legend><h3> Login </h3></legend>
                    <p><strong>username:</strong><br/>
                        <input type="text" name="username" placeholder="Username" required/></p>
                    <p><strong>password:</strong><br/>
                        <input type="password" name="password" placeholder="Password" required/></p>
                    <p><input type="submit" name="submit" value="login"/></p>
            </form>
            <form method="post" action="login/applyaccount.php">
                <p><input type="submit" value="Sign-up"/></p>
            </form>
        </fieldset>
    </div>
</body>
</html>
<?php
?>
