<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:"Poppins", sans-serif;
        }
        body{
            min-height: 150vh;
            background-color: rgb(239, 255, 252);
        }
        body::-webkit-scrollbar{
            display:none;
            scroll-behavior: smooth;
        }
        .BGHIS{
            float:right;
            margin-top: 20px;
            margin-right: 40px;
            font-size:27px;
            color: rgb(78, 2, 78);
        }
        .Sidebar{
            background-color: rgb(185, 240, 67);
            list-style: none;
            position: fixed;
            height: 100vh;
            width: 250px;
            box-shadow: -10px 0 10px rgba(0,0,0,0.1);
            display:flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            border-radius: 10px;
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
           .logo{
            font-weight: bold;
            padding-left: 15px;
            font-size: 20px;
            text-transform: uppercase;
            margin-top:30px;
            margin-left:10px;
            color: rgb(78, 2, 78);
           }
           .Welcome_message{
            position: relative;
            margin-left: 270px; 
            margin-right: 30px;
            color: black; 
            font-size: 15px;
            margin-top:70px;
            border: 20px;
            color:black;
           }
           .Fill_up_form{
            margin-left: 270px;
            display: flex;
            justify-content: space-between;
            flex-wrap:wrap;
            background-color: rgb(78, 2, 78);
            width:600px;
            height: 450px;
            border-radius: 10px;
           }
           .Fill_up_form .input-box{
            display: flex;
            justify-content: space-between;
            flex-wrap:wrap;
            margin-left:30px;
            
           }
           .input-box .input-field{
            position: relative;
            width: 50%;
            margin: 13px 0;
           }
           .input-box .input-field input{
            width: 500px;
            height: 30px;
            background: transparent;
            font-size: 16px;
            color: white;
            border: 1px solid rgb(185, 240, 67);
            border-top:0;
            border-left:0;
            border-right:0;
            border-width: 50%;
            padding: 10px 10px;
            cursor: pointer;
            outline: none;
           }
           ::-webkit-input-placeholder{
            color:rgb(185, 240, 67);
           }
           .Fill_up_form .btn{
            background-color: rgb(185, 240, 67);
            border: none;
            float: right;
            width: 20%;
            height:10%;
            border-radius: 10px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            color: rgb(78, 2, 78);
            transition: 0.3s;
           }
           .Fill_up_form .btn:hover{
            background-color: rgb(26, 213, 85);
            color:black;
           }
           .Profile_picture{
             float:right;
             width:350px;
             height:450px;
             background-color: rgb(185, 240, 67);
             margin-right: 50px;
             display: flex;
             flex-direction: column;
             border-radius: 10px;
             align-items:center;
             overflow: hidden;
           }
           .images{
            margin-top:20px;
            height:150px;
            width:150px;
            position: relative;
            background: url('icons/photo-gallery.png');
            background-size: 100% 100%;
            overflow:hidden;
            color:rgb(78, 2, 78);
            align-items: center;
           }
           .uploadfile{
            position:absolute;
            bottom:0;
            outline:none;
            color:transparent;
            width:100%;
            box-sizing: border-box;
            padding: 15px 120px;
            cursor:pointer;
            transition:0.5s;
           }
           .uploadfile::-webkit-file-upload-button{
            visibility: hidden;
           }
           .input-bio{
            width:200px;
            height:100px;
            background: transparent;

           }
    </style>
    <nav class="BGHIS">
        <h1 class="BGHIS1">BGHIS</h1>
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
            <li><a href="Home.php">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <span class="nav-items">Log-out</span>
            </a></li>
        </div>
    </nav>
</br>
    <section class="Welcome_message">
        <h1 style="color: rgb(78, 2, 78); font-size: 25px;">Personal Information</h1>
</br>
        <p style="font-size: 16px;">This is your profile setting where you can edit your details. You can update your personal information such as name, and profile picture. After making such changes, be sure to save or confirm your updates.</p>
    </section>
</br>
    <div class="Profile_picture">
        <div class="images">
            <input type="file" class="uploadfile"> 
        </div>
    </br>
        <h6 style="color:rgb(78, 2, 78); font-size:20px;">Change Profile</h6>
    </br>
</br>
</div>
    <section class="Fill_up_form">
        <form action="">
        </br>
            <div class="input-box">
                <div class="input-field">
                <input type="text" placeholder="First name" required>
            </div>
        </div>
            <div class="input-box">
                <div class="input-field">
                <input type="text" placeholder="Middle name" required>
            </div>
        </div>
            <div class="input-box">
                <div class="input-field">
                <input type="text" placeholder="Last name" required>
            </div>
        </div>
            <div class="input-box">
                <div class="input-field">
                <input type="text" placeholder="Age" required>
            </div>
        </div>
            <div class="input-box">
                <div class="input-field">
                <input type="text" placeholder="Birthdate" onfocus="this.type='date'" onblur="this.type='text'">
            </div>
        </div>
            <div class="input-box">
                <div class="input-field">
                <input type="email" placeholder="Email" required>
            </div>
        </div>
    </br>
            <button type="submit" class="btn">Save</button>
        </form>
    </section>
</body>
</html>