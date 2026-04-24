<?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$student = $data->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Info</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            width: 350px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #222;
        }
    </style>
</head>

<body>

<div class="card">
    <h2>Student Ma'lumotlari</h2>

    <div class="row">
        <span class="label">First Name:</span>
        <span class="value"><?= $student['first_name']?></span>
    </div>

    <div class="row">
        <span class="label">Last Name:</span>
        <span class="value"><?= $student['last_name']?></span>
    </div>

    <div class="row">
        <span class="label">Subject:</span>
        <span class="value"><?= $student['subject']?></span>
    </div>

    <div class="row">
        <span class="label">Phone:</span>
        <span class="value"><?= $student['phone']?></span>
    </div>

    <div class="row">
        <span class="label">Address:</span>
        <span class="value"><?= $student['address']?></span>
    </div>

</div>

</body>
</html>