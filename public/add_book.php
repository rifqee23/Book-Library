<!-- add_book.php -->
<?php include 'templates/header.php'; ?>
<?php include 'db/connection.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?> ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];

    $sql = "INSERT INTO books (title, author) VALUES ('$title', '$author')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='p-4 text-white bg-green-500 rounded'>New book added successfully</div>";
    } else {
        echo "<div class='p-4 text-white bg-red-500 rounded'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<div class="p-6 bg-white rounded-lg shadow-lg">
    <h2 class="mb-4 text-2xl">Add Book</h2>
    <form action="add_book.php" method="post">
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 mt-1 border border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
            <input type="text" name="author" id="author" class="w-full p-2 mt-1 border border-gray-300 rounded">
        </div>
        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Add Book</button>
    </form>
</div>

<?php include 'templates/footer.php'; ?>