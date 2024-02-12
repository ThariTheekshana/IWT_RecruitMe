<!DOCTYPE html>

<html>

<head>

    <title>recruit Me-Sign-in</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <form action="login.php" method="post">

        <h2>Welcome to Recruit Me</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label><b>Username</b></label>

        <input type="text" name="uname" placeholder="Enter Username"><br>

        <label><b>Password</b></label>

        <input type="password" name="password" placeholder="Enter Password"><br> 

        <button type="submit">Sign-in</button>

     </form>

</body>

</html>

