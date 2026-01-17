<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$student = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "UPDATE students SET
        name='$name', email='$email', course='$course'
        WHERE id=$id");

    header("Location: index.php");
}
?>

<form method="post">
    <h2>Edit Student</h2>
    Name: <input type="text" name="name" value="<?= $student['name'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $student['email'] ?>"><br><br>
    Course: <input type="text" name="course" value="<?= $student['course'] ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>
