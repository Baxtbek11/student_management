<?php include '../config/db.php';
 $sql = " SELECT * FROM teachers";
 $data = $conn->prepare($sql);
 $data->execute();
 $teachers = $data->fetchAll();
 ?> 
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Classes Form</title>
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
    <h2>Class qo'shish</h2>

    <form action="store.php" method="POST">
        <label>Class_name (Class Name)</label>
        <input type="text" name="class_name" required>
        <label for="teacher">Teacher_id</label>
        <select name="teacher_id" id="teacher" required>
            <option value="">Select teacher</option>    
            <?php foreach($teachers as $teacher): ?>
                <option value="<?= $teacher['id'] ?>"><?= $teacher['first_name'] . " ". $teacher['last_name'] ?></option>
            <?php endforeach; ?>

        </select>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>