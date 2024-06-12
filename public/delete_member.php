

<?php
include "db/connection.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM members WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Member deleted successfully');window.location.href='member.php';</script>";
    } else {
        echo "<script>alert('Error deleting member');window.location.href='member.php';</script>";
    }
}
?>