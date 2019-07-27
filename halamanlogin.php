<html>
<head>
    <link rel="icon" type="image/png" href="img/logo2.png">
    <link rel="stylesheet" href="Style.css"/>
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/gerak.js"></script>
</head>
<body>
<ul>
        <c><img src="img/LOGOO.png"></c>
        <li><a class="menuaboutus" href="#">About Us</a></li>
        <li><a href="HalamanSignUp.php">Sign Up</a></li>
        <li><a href="HalamanLogin.php">Sign In</a></li>
        <li><a href="index.php"> Search </a></li>
        <li><a href="Home.php">Journals</a></li>
</ul>
<div class="background">
    </br></br></br></br></br></br></br></br>
    <div class="container">
            <form method="post" action="Login.php">
                <d>
                    <h3>Sign in using your <b>Jurnal Online</b> account</h3>
                    Username :
                    <input type="text" name="lusername" maxlength="10" placeholder="username" required autofocus>
                    Password :
                    <input type="password" name="lpassword" maxlength="8" placeholder="password" required autofocus>
                    <input id="tombolsignin" type="submit" name="login" value="Sign in">
                </d>
            </form>
    </div>
</div>    
</body>
</html>