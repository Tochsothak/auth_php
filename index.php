<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup/signup_view.inc.php';
    require_once 'includes/login/login_view.inc.php';
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

    <h3>
        <?php
            output_username();
        ?>
    </h3>
    <?php
        if (!isset($_SESSION["user_id"])){
            ?>
                 <h3>Log in</h3>
             <form action="includes/login/login.inc.php" method="POST">
               <input type="text" name="username" placeholder="Username"/>
               <input type="password" name="password" placeholder="Password"/>
               <button >Login</button>
            </form>
            <?php
        }
    ?>
   
    <?php
        check_login_errors();
    ?>
    
    <h3>Sign Up</h3>
    <form action="includes/signup/signup.inc.php" method="POST">
       <?php
             signup_input ();
       ?>
        <button>Signup</button>
    </form>

    <?php
        check_signup_errors();
    ?>

     <form action="includes/logout.inc.php" method="POST">
        <button class="logout">Log out</button>
    </form>
</body>
</html>