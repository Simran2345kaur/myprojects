<?php include "layouts/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Chat Room</title>
    <style>
        .main-content {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            margin-top: 100px; /* Added margin to avoid overlap with fixed navbar */
            text-align: center;
            margin-left: -500px;
        }
        .main-content h1 {
            font-size: 50px;
            margin-bottom: 20px;
            color: white;
        }
        .main-content p {
            font-size: 20px;
            color: white;
        }
        .btn-custom {
            background-color: rgba(0, 123, 255, 0.9);
            border: none;
            color: white;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: rgba(0, 123, 255, 1);
            color: white;
        }
    </style>
</head>
<body>

<div class="main-content">
    <h1>Welcome to Your Chat Room</h1>
    <p>Connect with your friends in real-time</p>
    <button type="button" class="btn-custom" onclick="window.location.href='login.php'">Login</button>
    <button type="button" class="btn-custom" onclick="window.location.href='register.php'">Signup</button>
</div>

</body>
</html>


