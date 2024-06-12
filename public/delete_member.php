<!-- delete_member.php -->
<?php include 'db/connection.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?> ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM members WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Member deleted successfully');window.location.href='members.php';</script>";
    } else {
        echo "<script>alert('Error deleting member');window.location.href='members.php';</script>";
    }
}
?>