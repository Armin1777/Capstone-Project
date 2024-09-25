<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin:0;
            padding:0;
            font-family: "Poppins", sans-serif;
        }
        body{
            background: rgb(239, 255, 252);
            box-sizing:border-box;
        }
        .BGHIS{
            background-color:none;
        }
        .logo1{
            float:right;
            margin-top: 20px;
            margin-right: 40px;
            font-size:40px;
            color: rgb(78, 2, 78);
        }
        .Sidebar{
            background-color: rgb(185, 240, 67);
            list-style: none;
            position: fixed;
            height: 100vh;
            width: 250px;
            z-index: 999;
            box-shadow: -10px 0 10px rgba(0,0,0,0.1);
            display:flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            border-radius: 10px;
        }
        .logo{
            font-weight: bold;
            padding-left: 15px;
            font-size: 20px;
            text-transform: uppercase;
            margin-top:30px;
            margin-left:10px;
            color: rgb(78, 2, 78);
           }
           nav li{
            height: 50px;
            }
           nav a{
            position:relative;
            font-size:15px;
            display:table;
            text-decoration: none;
            flex-direction: column;
            color: rgb(78, 2, 78);
            transition: .3s;
            padding: 10px;
           }
           nav .fa{
            position:relative;
            width: 70px;
            height:40px;
            top:0;
            font-size:20px;
            text-align:center;
           }
           nav a:hover{
            color: white;
           }
    </style>
    <nav class="BGHIS">
        <h1 class="logo1">BGHIS</h1>
    </nav>
</head>
    <body>
        <nav>
            <div class="Sidebar">
                <li><h1 href="" class="logo">dashboard</h1></li>
                </br>
            </br>
                    <li><a href="dashboard.php">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="nav-items">Home</span>
                    </a></li>
                    <li><a href="profile.php">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <span class="nav-items">Profile</span>
                    </a></li>
                    <li><a href="maps.php">
                        <i class="fa fa-map" aria-hidden="true"></i>
                        <span class="nav-items">Maps</span>
                    </a></li>  
                    <li><a href="requests.php">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="nav-items">Requests</span>
                    </a></li>  
                    <li><a href="Follow_up.php">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="nav-items">Follow up</span>
                    </a></li>  
                    <li><a href="Settings.php">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <span class="nav-items">Settings</span>
                    </a></li>
                    <li><a href="Home.php">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span class="nav-items">Log-out</span>
                    </a></li>
            </div>
        </nav>
    </body>
</html>