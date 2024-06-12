<!-- books.php -->
<?php include 'templates/header.php'; ?>
<?php include 'db/connection.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?>

<div class="p-6 bg-white rounded-lg shadow-lg">
    <h2 class="mb-4 text-2xl">Books</h2>
    <a href="add_book.php" class="px-4 py-2 text-white bg-blue-500 rounded">Add Book</a>
    <table class="w-full mt-4 table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Author</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM books");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='px-4 py-2 border'>{$row['id']}</td>";
                echo "<td class='px-4 py-2 border'>{$row['title']}</td>";
                echo "<td class='px-4 py-2 border'>{$row['author']}</td>";
                echo "<td class='px-4 py-2 border'><a href='edit_book.php?id={$row['id']}' class='text-blue-500'>Edit</a> | <a href='delete_book.php?id={$row['id']}' class='text-red-500'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'templates/footer.php'; ?>