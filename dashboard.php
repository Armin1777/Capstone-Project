
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
           *{
            margin: 0;
            padding: 0;
           }
           body{
            min-height: 150vh;
            box-sizing:border-box;
            font-family: "Poppins", sans-serif;
            background-color: rgb(239, 255, 252);
           }
           body::-webkit-scrollbar{
            display:none;
            scroll-behavior: smooth;
           }
           nav{
            background-color: none; 
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
           .header{
            position: relative;
            padding: 20px;
            margin-left: 270px; 
            margin-right: 30px;
            color: black; 
            border: 2px rgb(0,0,0, 0.1);
            border-radius: 20px; 
            background-color: white;
            font-size: 25px;
            box-shadow: 0 0 10px rgba(0,0,0, 0.2);
            margin-top:70px;
           }
           .header h2{
            color: rgb(78, 2, 78);
           }
           .main{
            display:flex;
            margin-left:270px;
            border-radius: 20px;
            background-color: rgb(26, 213, 85);
            margin-top: 15;
            margin-right: 30px;
            height:35%;
            
           }
           .main-skills{
            display:flex;
            margin-top:20px;
            margin-right: 50px;
           }
           .main-skills .card{
            text-align:center;
            padding: 20px 20px;
            justify-content: space-evenly;
           }
           .card .btn{
            background:rgb(185, 240, 67);
            outline: none;
            width:40%;
            height:20%;
            border-radius: 10px;
            border:none;
            font-size: 18;
            font-weight:500px;
            cursor: pointer;
            color: rgb(78, 2, 78);
            transition: .3s;
           }
           .card .btn:hover{
            color:white;
           }
           p{
            font-size: 14px;
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
           .aaron{
            float:right;
            margin-top: 20px;
            margin-right: 40px;
            font-size:40px;
            color: rgb(78, 2, 78);
           }
        </style>
    </head>
            <nav class="caleb">
                <h1 class="aaron">BGHIS</h1>
            </nav>
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
                    <li><a href="Home.php">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span class="nav-items">Log-out</span>
                    </a></li>
                </div>
            </nav>
        </br>
       
            <section class="header">
                <h2 class="message">Hello User!</h2>
                <p>This is the official BGHIS website where you can use our map to analyze and apply for clearances.</p>
            </section>
            <section class="main">
                <div class="main-skills">
                    <div class="card">
                        <img src="icons/diversity.png" style="width: 100px; height: 100px">
                    </br>
                </br>
                        <h3>Population</h3>
                        <p>Bulan has approximately 8 Billion inhabitants.</p>
                    </div>
                </div>
                <div class="main-skills">
                    <div class="card">
                        <img src="icons/streets.png" style="width: 100px; height: 100px">
                    </br>
                </br>
                        <h3>Barangays</h3>
                        <p>There are 63 barangays located within this region.</p>
                    </br>
                        <button class="btn">View</button>
                    </div>
                </div>
                <div class="main-skills">
                    <div class="card">
                        <img src="icons/folder.png" style="width: 100px; height: 100px">
                    </br>
                </br>
                        <h3>Clearances</h3>
                        <p>For your list of documents.See it here.</p>
                    </br>
                        <button class="btn">View</button>
                    </div>
                </div>
            </section>
    </body>
</html>
