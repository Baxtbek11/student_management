<?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM classes WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$class = $data->fetch();
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Class Edit</title>
    <link rel="stylesheet" href="../assets/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 400px;
        }

                header {
            position: absolute;
            top: 0px;
            background: #2c3e50;
            padding: 15px 0;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: none;
            height: 70px;
        }

        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
       <?php include '../yordamchi/header.php'; ?>

<div class="form-container">
    <h2>Classni tahrirlash</h2>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $class['id'] ?>" required>
        <label>Class_name (Class name)</label>
        <input type="text" name="class_name" value="<?= $class['class_name'] ?>" required>

        <label>Teacher_id (Teacher_id)</label>
        <input type="text" name="teacher_id" value="<?= $class['teacher_id'] ?>" required>

        <button type="submit">Saqlash</button> 
    </form>
</div>

</body>
</html>