
<?php
require 'db.php';

$id = $_GET['id'] ?? null;

$stmt = $pdo->prepare('SELECT * FROM students WHERE id=:id');
$stmt->execute(['id' => $id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$student) {
    exit('Student not found.');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="update_student.php" method="POST">
        <input type="hidden" name="id"
               value="<?= htmlspecialchars($student['id']) ?>">

        Student Number:
        <input type="text" name="student_number" required
               value="<?= htmlspecialchars($student['student_number']) ?>">
        <br><br>

        First Name:
        <input type="text" name="first_name" required
               value="<?= htmlspecialchars($student['first_name']) ?>">
        <br><br>

        Last Name:
        <input type="text" name="last_name" required
               value="<?= htmlspecialchars($student['last_name']) ?>">
        <br><br>

        Course:
        <input type="text" name="course" required
               value="<?= htmlspecialchars($student['course']) ?>">
        <br><br>

        <button type="submit">Update Student</button>
    </form>

    <p><a href="index.php">Back to Student Records</a></p>
</body>
</html>
