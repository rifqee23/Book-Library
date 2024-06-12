<!-- add_transaction.php -->
<?php include 'templates/header.php'; ?>
<?php include 'db/connection.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?>?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $member_id = $_POST['member_id'];
    $book_id = $_POST['book_id'];
    $borrow_date = $_POST['borrow_date'];
    $return_date = $_POST['return_date'];

    $sql = "INSERT INTO transactions (member_id, book_id, borrow_date, return_date) VALUES ('$member_id', '$book_id', '$borrow_date', '$return_date')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='p-4 text-white bg-green-500 rounded'>Transaction added successfully</div>";
    } else {
        echo "<div class='p-4 text-white bg-red-500 rounded'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<div class="p-6 bg-white rounded-lg shadow-lg">
    <h2 class="mb-4 text-2xl">Add Transaction</h2>
    <form action="add_transaction.php" method="post">
        <div class="mb-4">
            <label for="member_id" class="block text-sm font-medium text-gray-700">Member</label>
            <select name="member_id" id="member_id" class="w-full p-2 mt-1 border border-gray-300 rounded">
                <?php
                $members = $conn->query("SELECT * FROM members");
                while ($member = $members->fetch_assoc()) {
                    echo "<option value='{$member['id']}'>{$member['name']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="book_id" class="block text-sm font-medium text-gray-700">Book</label>
            <select name="book_id" id="book_id" class="w-full p-2 mt-1 border border-gray-300 rounded">
                <?php
                $books = $conn->query("SELECT * FROM books");
                while ($book = $books->fetch_assoc()) {
                    echo "<option value='{$book['id']}'>{$book['title']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="borrow_date" class="block text-sm font-medium text-gray-700">Borrow Date</label>
            <input type="date" name="borrow_date" id="borrow_date" class="w-full p-2 mt-1 border border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="return_date" class="block text-sm font-medium text-gray-700">Return Date</label>
            <input type="date" name="return_date" id="return_date" class="w-full p-2 mt-1 border border-gray-300 rounded">
        </div>
        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Add Transaction</button>
    </form>
</div>

<?php include 'templates/footer.php'; ?>