<!-- transactions.php -->
<?php include 'templates/header.php'; ?>
<?php include 'db/connection.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?> ?>

<div class="p-6 bg-white rounded-lg shadow-lg">
    <h2 class="mb-4 text-2xl">Transactions</h2>
    <a href="add_transaction.php" class="px-4 py-2 text-white bg-blue-500 rounded">Add Transaction</a>
    <table class="w-full mt-4 table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Member</th>
                <th class="px-4 py-2">Book</th>
                <th class="px-4 py-2">Borrow Date</th>
                <th class="px-4 py-2">Return Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT transactions.id, members.name AS member_name, books.title AS book_title, transactions.borrow_date, transactions.return_date FROM transactions JOIN members ON transactions.member_id = members.id JOIN books ON transactions.book_id = books.id");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='px-4 py-2 border'>{$row['id']}</td>";
                echo "<td class='px-4 py-2 border'>{$row['member_name']}</td>";
                echo "<td class='px-4 py-2 border'>{$row['book_title']}</td>";
                echo "<td class='px-4 py-2 border'>{$row['borrow_date']}</td>";
                echo "<td class='px-4 py-2 border'>{$row['return_date']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'templates/footer.php'; ?>