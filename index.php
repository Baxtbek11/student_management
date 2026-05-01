<?php include 'config/db.php' ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <style>
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: Arial, sans-serif;
                    }

                    body {
                        background: #f4f6f9;
                    }

                    header {
                        background: #2c3e50;
                        padding: 15px 0;
                    }

                    .container {
                        width: 90%;
                        margin: auto;
                    }

                    nav {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                    }

                    .logo {
                        color: white;
                        font-size: 22px;
                        font-weight: bold;
                    }

                    ul {
                        list-style: none;
                        display: flex;
                        gap: 20px;
                    }

                    ul li a {
                        text-decoration: none;
                        color: white;
                        font-size: 16px;
                        padding: 8px 12px;
                        transition: 0.3s;
                        border-radius: 5px;
                    }

                    ul li a:hover {
                        background: #3498db;
                    }

        .hero {
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 40px;
            color: #2c3e50;
        }

        .hero p {
            margin-top: 10px;
            font-size: 18px;
            color: #555;
        }

        .cards {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin: 40px;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            padding: 20px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .card p {
            color: #666;
        }

        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
 <?php include "yordamchi/header.php" ?>

<section class="hero">
    <h1>Welcome to School Management System</h1>
    <p>Manage teachers, students and classes easily</p>
</section>

<section class="cards">
    <div class="card">
        <h3>Teachers</h3>
        <p>View and manage all teachers</p>
    </div>
    <div class="card">
        <h3>Students</h3>
        <p>Manage student information</p>
    </div>
    <div class="card">
        <h3>Classes</h3>
        <p>Organize classes efficiently</p>
    </div>
</section>

<footer>
    <p>Bo'br ukam</p>
</footer>

</body>
</html>