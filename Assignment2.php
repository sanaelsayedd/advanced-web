<?php
 
    $dsn='mysql:host=localhost;dbname=assignment2;charset=utf8mb4'; //Data Source name
    $user = 'root';
    $pass = '';

    try{

        $pdo = new PDO($dsn,$user,$pass); //Start new connection with PDO class

        echo 'you are Connected';

    }catch(PDOException $e){
        echo 'Failed'.$e->getMessage();

    }
    // Pagination 
    $limit = 5;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    // LIMIT & OFFSET
    $sql = "SELECT * FROM students LIMIT $limit OFFSET $offset";
    $stmt = $pdo->query($sql);
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //  total pages
    $totalRows = $pdo->query("SELECT COUNT(*) FROM students")->fetchColumn();
    $totalPages = ceil($totalRows / $limit);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
</head>
<body>

    <h2>Student List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['ID'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div>
        <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1 ?>">Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?= $i ?>"><?= $i ?></a>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <a href="?page=<?= $page + 1 ?>">Next</a>
        <?php endif; ?>
    </div>

</body>
</html>