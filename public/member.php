<!-- members.php -->
<?php include 'templates/header.php'; ?>
<?php include 'db/connection.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?>

<div class="p-6 bg-white rounded-lg shadow-lg">
    <h2 class="mb-4 text-2xl">Members</h2>
    <a href="add_member.php" class="px-4 py-2 text-white bg-blue-500 rounded">Add Member</a>
    <table class="w-full mt-4 table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM members";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();

            $i = 1;
            while ($row = $result->fetch_assoc()) {
                $name = htmlspecialchars($row['name']);
                $email = htmlspecialchars($row['email']);
                $id = htmlspecialchars($row['id']);

                echo "<tr>";
                echo "<td class='px-4 py-2 border'>{$i}</td>";
                echo "<td class='px-4 py-2 border'>{$name}</td>";
                echo "<td class='px-4 py-2 border'>{$email}</td>";
                echo "<td class='px-4 py-2 border'><a href='edit_member.php?id={$id}' class='text-blue-500'>Edit</a> | <a href='delete_member.php?id={$id}' class='text-red-500'>Delete</a></td>";
                echo "</tr>";

                $i++;
            }
            ?>

        </tbody>
    </table>
</div>

<?php include 'templates/footer.php'; ?>