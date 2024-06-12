<!-- delete_book.php -->
<?php include 'db/connection.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?> ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Book deleted successfully');window.location.href='books.php';</script>";
    } else {
        echo "<script>alert('Error deleting book');window.location.href='books.php';</script>";
    }
}
?>