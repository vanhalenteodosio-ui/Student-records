<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "INSERT INTO students (name, email, course)
                         VALUES ('$name', '$email', '$course')");
    header("Location: index.php");
}
?>

<form method="post">
    <h2>Add Student</h2>
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Course: <input type="text" name="course" required><br><br>
    <button type="submit" name="submit">Save</button>
</form>
