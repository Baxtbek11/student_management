<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Teacher Form</title>
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
    <h2>Teacher qo'shish</h2>

    <form action="store.php" method="POST">
        <label>Ism (First Name)</label>
        <input type="text" name="first_name" required>

        <label>Familiya (Last Name)</label>
        <input type="text" name="last_name" required>

        <label>Fan (Subject)</label>
        <input type="text" name="subject" required>

        <label>Telefon</label>
        <input type="text" name="phone" placeholder="+998..." required>

        <label>Manzil (Address)</label>
        <textarea name="address" required></textarea>

        <label>Tajriba yili (Experience)</label>
        <input type="number" name="experience" required>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>