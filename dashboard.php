<?php include 'config.php'; 
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<h2>Dashboard Ticket</h2>
<a href="create_ticket.php">+ Create Ticket</a> |
<a href="logout.php">Logout</a>

<hr>

<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Title</th>
    <th>Status</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM tickets");

while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $d['title'] ?></td>
    <td><?= $d['status'] ?></td>
</tr>
<?php } ?>
</table>
