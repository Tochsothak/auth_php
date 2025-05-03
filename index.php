<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?php
     
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"/>
    <title>Login System</title>
</head>
<body>
    <h3>Log in</h3>
    <form  action="includes/login.inc.php" method="POST">
        <input type="text" name="username" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>
        <button >Login</button>
        
    </form>
    <h3>Sign Up</h3>
    <form action="includes/signup.inc.php" method="POST">
       <?php
             signup_input ()
       ?>
        <button>Signup</button>
    </form>

    <form>
        <button class="logout">Log out</button>
    </form>

    <?php
        check_signup_errors();
    ?>
</body>
</html>