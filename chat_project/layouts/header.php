<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Chat Room</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url('images/img1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .navbar-custom {
            background-color: rgba(0, 123, 255, 0.9);
            border-color: rgba(0, 123, 255, 0.9);
            border-radius: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        .navbar-custom .navbar-brand {
            color: #FFFFFF;
            font-weight: bold;
            font-size: 24px;
        }
        .navbar-custom .navbar-brand:hover {
            color: #FFD700;
        }
        .navbar-custom .navbar-nav > li > a {
            color: white;
            font-size: 16px;
            font-weight: 500;
        }
        .navbar-custom .navbar-nav > li > a:hover {
            color: #FFD700;
        }
        .main-content {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 50px;
            border-radius: 10px;
            margin-top: 100px; /* Added margin to avoid overlap with fixed navbar */
        }
        .main-content h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .main-content p {
            font-size: 20px;
        }
        .hover_effect:hover{
          background-color: rgba(0, 123, 255, 1);
            color: #803260 !important;
        }
        
    </style>
</head>
<body>

<nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand hover_effect" href="index.php">My Chat Room</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php" class="hover_effect"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php" class="hover_effect"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
