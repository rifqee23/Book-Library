<!-- edit_book.php -->
<?php include 'templates/header.php'; ?>
<?php include 'db/connection.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?> ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM books WHERE id = $id");
    $book = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    $sql = "UPDATE books SET title='$title', author='$author' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='p-4 text-white bg-green-500 rounded'>Book updated successfully</div>";
        header("Location: books.php");
    } else {
        echo "<div class='p-4 text-white bg-red-500 rounded'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<div class="p-6 bg-white rounded-lg shadow-lg">
    <h2 class="mb-4 text-2xl">Edit Book</h2>
    <form action="edit_book.php?id=<?php echo $id; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="<?php echo $book['title']; ?>" class="w-full p-2 mt-1 border border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
            <input type="text" name="author" id="author" value="<?php echo $book['author']; ?>" class="w-full p-2 mt-1 border border-gray-300 rounded">
        </div>
        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Update Book</button>
    </form>
</div>

<?php include 'templates/footer.php'; ?>