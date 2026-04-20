 <?php include "../config/db.php";
 $sql = " SELECT * FROM students";
 $data = $conn->prepare($sql);
 $data->execute();
 $students = $data->fetchAll();
 $cnt = 1;
 ?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Studentlar</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h2 {
            margin: 0;
        }

        .add-btn {
            background: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }

        .add-btn:hover {
            background: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
        }

        thead {
            background: #007bff;
            color: white;
            
        }
        thead:hover {
        background: #4b14c0;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center; 
        }

        .action-btn {
            padding: 6px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 2px;
            color: white;
        }

        .view {
            background: #17a2b8;
            padding: 6px;
            border-radius: 5px;
            color: black;
            text-decoration: none;
        }

        .edit {
            background: #ffc107;
            padding: 6px;
            color: black;
            border-radius: 5px;
            text-decoration: none;
        }

        .delete {
            background: #dc3545;
            padding: 6px;
            border-radius: 5px;
            color: black;
            text-decoration: none;
        }

        .action-btn:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>

<div class="container">
    
    <div class="header">
        <h2>Studentlar Ro'yxati</h2>
        <a href="create.php" class="add-btn">+ Student qo‘shish</a        >
    </div>

    <table>
        <thead style="">
            <tr>
                <th>ID</th>
                <th>Ism</th>
                <th>Familiya</th>
                <th>Yosh</th>
                <th>Sinf</th>
                <th>Telefon</th>
                <th>Manzil</th>
                <th>Amallar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($students as $student): ?>
            <tr>
                    <td><?= $cnt++?></td>
                    <td><?= $student['first_name']?></td>
                    <td><?= $student['last_name']?></td>
                    <td><?= $student['age']?></td>
                    <td><?= $student['class_name']?></td>
                    <td><?= $student['phone']?></td>
                    <td><?= $student['address']?></td>
                    
                    <td class="actions">
                        <a href="#" class="view">Ko‘rish</a>
                        <a href="edit.php?id=<?= $student['id'] ?>" class="edit">Tahrirlash</a>
                        <a href="delete.php?id=<?= $student['id'] ?>" class="delete" onclick="return confirm('O\'chirasizmi!')">O‘chirish</a>
                    </td>
                </tr>
            <?php endforeach; ?>
           
        </tbody>
    </table>

</div>

</body>
</html>