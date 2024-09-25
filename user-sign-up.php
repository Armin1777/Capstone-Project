<html>
    
    <head>
        <title>Sign Up</title>
      <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin-top: auto;
            background-image: url('city-map-any-kind-digital-info-graphics-print-publication-gps-map_403715-37.avif');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .calvin{
            width: 750px;
            border-radius: 10px;
            color:black;
            background: transparent;
            border: 2px solid rgba(255,255,255, .2);
            backdrop-filter: blur(20px);
            align-self:center;
            box-shadow: 0 0 10px rgba(0,0,0, 0.2);
            margin-top: 50px;
        }
        .calvin h1{
            font-size: 36px;
            text-align: center;
            margin-bottom:20px;

        }
        .calvin h2{
            font-size: 26px;
            text-align: center;
            margin-bottom:20px;

        }
        .calvin .input-box{
            display: flex;
            justify-content: space-between;
            flex-wrap:wrap;
            margin-left: 50px;
            
        }
        .input-box .input-field{
            position: relative;
            width: 50%;
            margin: 13px 0;
        }
        .input-box .input-field input{
            width: 300px;
            height: 30px;
            background: transparent;
            font-size: 16px;
            color: black;
            border-radius: 10px;
            border: 2px solid black;
            padding: 10px 10px;
        }
        .calvin .btn{
            width: 1000px;
            height: 30px;
            margin-right: 50;
            font-size: 16px;
            cursor: pointer;
            background:yellowgreen;
            border-radius: 20px;
            color:black;
            outline: none;
            border: none;
            font-weight:400;
            transition: .3s;
        }
        .calvin .btn:hover{
            color:white
        }
        nav{
            background: yellowgreen;
            box-shadow: 3px 3px 5px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            width: 100%;
        }
        nav  ul{
             list-style:none;
            display: flex;
            justify-content: flex-end;
            align-items:center;
            margin-right: 100px;
        }
        nav li{
            height: 50px;
        }
        nav a{
            height: 100%;
            padding: 0 30px;
            text-decoration: none;
            display:flex;
            align-items: center;
            color: black;
            transition: .3s;
        }
        nav a:hover{
            color: white;
            
        }
      </style>  
    </head>
    <body>
        <?php
        includes("php/config.php");
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password= $_POST['password'];

            //verifying the unique email

            $verify_query = mysql_query($con,"SELECT Email FROM users WHERE Email='$email'")
            if(mysql_num_rows($verify_query) !=0){
                echo"<div class='message'>
                     </div> <br>";
                echo"<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
            }
            else{
                mysql_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','email','age','password')") or die("Error Occured");
                
            echo "<div class='message'>
                      <p>Registration successfully!</p>
                     </div> <br>";
                echo"<a href='Home.php'><button class='btn'>Login Now</button>};    
        ?>
        <nav>
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Administrators</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ's</a></li>
            </ul>
        </nav>
        <div class="calvin">
            <form action="">
            </br>
        </br>
                <h2>Welcome to the System, Please Register Here!</h2>
            </br>
        </br>
            <div class="input-box">
                <div class="input-field">
                    <h4>Lastname</h4>
                    <input type="text" required >
                </div>
                <div class="input-field">
                    <h4>Firstname</h4>
                    <input type="text" required>
                </div>
                <div class="input-field">
                    <h4>M.I</h4>
                    <input type="text" required>
                </div>
                <div class="input-field">
                    <h4>Email</h4>
                    <input type="text"  required>
                </div>
                <div class="input-field">
                    <h4>Password</h4>
                    <input type="password"  required>
                </div>
                <div class="input-field">
                    <h4>Confirm Password</h4>
                    <input type="password" required>
                </div>
            </br>
        </br>
                <label><input type="checkbox">I hereby declare that the information provided above is correct.</label>
            </br>
        </br>
                <button type="submit" class="btn">Register</button>
            </br>
            
             
            </div>
            </form>
        </div>
        <?php } ?>
        </div>
    </body>
</html>