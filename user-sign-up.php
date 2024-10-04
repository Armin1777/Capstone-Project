<html>
    <head>
        <title>Sign Up</title>
    </head>

    <!--Design of the Website-->
    <style>
        *{
            padding:0;
            margin:0;
        }
        body{
            font-family: "Poppins", sans-serif;
            background: rgb(239, 255, 252);
            box-sizing:border-box;
            height:100vh;
            display:flex;
            justify-content:center;   
            margin-top:0;
        }
        body::-webkit-scrollbar{
            display:none;
            scroll-behavior: smooth;
        }
        h1{
            margin-left: 100px;
            margin-top: 250px;
            text-align:center;
        }
        .calvin{
            background: rgb(185, 240, 67);
            padding:10px;
            width:400px;
            height: 800px;
            box-sizing:border-box;
            margin-left:300px;
            margin-right:200px;
        }
        .calvin .input-box{
            margin:20px;
            margin-top:120px;
        
        }
        .input-field{
            text-align: left;
            font-size: 15px;
            justify-content:center;
            margin-top:15px;
        }
        .input-field input{
            width:330px;
            height: 30px;
            justify-content:center;
            background:none;
            display:flex;
            border-top:none;
            border-left:none;
            border-right:none;
            border-color: rgb(78, 2, 78);
            outline:none;
        }
        .calvin .btn{
            width: 300px;
            height: 45px;
            background: rgb(78, 2, 78);
            border: none;
            outline: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 16px;
            color: white;
            font-weight: 600;
            margin-left:15px;
        }
    </style>
        <h1 style="font-size:70px; 
                   text-align:left; 
                   margin-right:10px; 
                   justify-content:center; 
                   color:rgb(78,2,78);
                   border: 3px solid rgb(185, 240, 67);
                   border-top:none;
                   border-left:none;
                   border-right:none;
                   height:350px;
                   ">BGHIS:Web-based Mapping and Household Profiling System </h1>
    
    <body>
        <!--Sign up form for registration-->
        <div class="calvin">
            <form class="form" action="registration.php" id="signupform" method="post">
            </br>
        </br>
                <h2 style="text-align:center; font-size:25px; margin: 10px; margin-top:150px; color:rgb(78,2,78)">Welcome to the System, Please Register Here!</h2>
            <div class="input-box">
                <div class="input-field">
                    <h4 style="color:rgb(78, 2, 78); font-weight:150px">Input Name</h4>
                    <input type="text" id="name" name="name" required >
                </div>
                <div class="input-field">
                    <h4 style="color:rgb(78, 2, 78); font-weight:150px">Email</h4>
                    <input type="email" id="email" name="email" required >
                </div>
                <div class="input-field">
                    <h4 style="color:rgb(78, 2, 78); font-weight:150px">Password</h4>
                    <input type="password" id="password" name="password" required >
                </div>
                
            </br>
                <label><input type="checkbox">I hereby declare that the information provided above is correct.</label>
            </br>
        </br>
                <button type="submit" class="btn">Register</button>
            </br>
            </div>
            </form>
        </div>
        </div>
    </body>
</html>

