<?php include 'config.php'; ?>

<h2>Create Ticket</h2>

<form method="POST">
    <input type="text" name="title" placeholder="Issue title" required><br><br>
    <textarea name="desc" placeholder="Describe your issue" required></textarea><br><br>
    <button type="submit" name="save">Submit</button>
</form>

<?php
if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];

    mysqli_query($conn, "INSERT INTO tickets(title, description) VALUES('$title','$desc')");
    header("Location: dashboard.php");
}
?>
