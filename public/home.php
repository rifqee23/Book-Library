<!-- index.php -->
<?php include 'templates/header.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?> ?>

<div class="flex justify-center">
    <div class="w-1/2 p-6 bg-white rounded-lg shadow-lg">
        <h1 class="mb-4 text-2xl">Welcome to the Library Management System</h1>
        <a href="books.php" class="block text-blue-500">Manage Books</a>
        <a href="member.php" class="block text-blue-500">Manage Members</a>
    </div>
</div>

<?php include 'templates/footer.php'; ?>