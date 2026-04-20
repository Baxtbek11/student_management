<?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$student = $data->fetch();
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student Edit</title>
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

<div class="form-container">
    <h2>Studentni tahrirlash</h2>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $student['id'] ?>" required>
        <label>Ism (First Name)</label>
        <input type="text" name="first_name" value="<?= $student['first_name'] ?>" required>

        <label>Familiya (Last Name)</label>
        <input type="text" name="last_name" value="<?= $student['last_name'] ?>" required>

        <label>Yosh (Age)</label>
        <input type="number" name="age" value="<?= $student['age'] ?>" required>

        <label>Sinf (Class)</label>
        <input type="text" name="class_name" value="<?= $student['class_name'] ?>" required>

        <label>Telefon</label>
        <input type="tel" name="phone" placeholder="+998..." value="<?= $student['phone'] ?>" required>

        <label>Manzil (Address)</label>
        <textarea name="address" required> <?=  $student['address']  ?></textarea>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>