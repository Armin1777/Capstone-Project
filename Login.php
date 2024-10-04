
<html>
   
    <title>BGHIS: Web-based Mapping and Household Information System</title>
    <head>
     <link rel="stylesheet" href="index.css">
    
    </head>
    <h1 class="xb">BGHIS:Web-based Mapping and Household Information System</h1>
    <body>
        <nav>
            <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Administrators</a></li>
            <li><a href="">About</a></li>
            <li><a href="">FAQ's</a></li>
            </ul>
        </nav>
    </br>
</br>
        <div class="nash" action="conne.php" method="POST">
        <form action="login.php" method="POST">
            <h2>Login to your account</h2>
        </br>
        <div class="input-box">
            <input type="email" placeholder="Email" name="email" id="email" required>
        </div>
    </br>
        <div class="input-box">
            <input type="password" placeholder="Password" name="password" id="password"required>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot Password</a>
        </div>
    </br>
    
        <button type="submit" class="btn" id="login">Log in</button>
</br>
</br>
        <button type="submit" class="btn2" id="signup" onclick="location.href='user-sign-up.php'">Sign Up</button>
        </form> 
    </br>
        <p>If you are a new user, create account by clicking "Sign Up"</p>
        
</div>
    </body>
</html>