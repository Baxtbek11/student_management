 <?php include "../config/db.php";
 $sql = " SELECT * FROM classes";
 $data = $conn->prepare($sql);
 $data->execute();
 $classes = $data->fetchAll();
 $cnt = 1;
 ?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Classes</title>
    <link rel="stylesheet" href="../assets/style.css">
    <style> 
        *{
                        margin: 0;
            padding: 0;
        }
    
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

                header {
            position: absolute;
            top: 0px;
            background: #2c3e50;
            padding: 15px 0;
            width: 100%;
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
       <?php include '../yordamchi/header.php'; ?>

<div class="container">
    
    <div class="header">
        <h2>Classes Ro'yxati</h2>
        <a href="create.php" class="add-btn">+ Class qo‘shish</a        >
    </div>

    <table>
        <thead style="">
            <tr>
                <th>ID</th>
                <th>Sinfi</th>
                <th>Teacher_id</th>
                <th>Amallar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($classes as $class): ?>
            <tr>
                    <td><?= $cnt++?></td>
                    <td><?= $class['class_name']?></td>
                    <td><?= $class['teacher_id']?></td>
                    
                    <td class="actions">
                        <a href="show.php?id=<?= $class['id'] ?>" class="view">Ko‘rish</a>
                        <a href="edit.php?id=<?= $class['id'] ?>" class="edit">Tahrirlash</a>
                        <a href="delete.php?id=<?= $class['id'] ?>" class="delete" onclick="return confirm('O\'chirasizmi!')">O‘chirish</a>
                    </td>
                </tr>
            <?php endforeach; ?>
           
        </tbody>
    </table>

</div>

</body>
</html>