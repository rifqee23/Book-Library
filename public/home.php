<!-- index.php -->
<?php include 'templates/header.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?>

<div class="flex items-center justify-center w-full h-screen">
    <div class="flex flex-col items-center justify-center w-[800px] h-[300px] p-6 bg-white rounded-lg shadow-lg">
        <h1 class="mb-20 text-2xl">Welcome to the Library Management System</h1>
        <a href="books.php" class="block p-2 text-blue-500 hover:text-blue-950">Manage Books</a>
        <a href="member.php" class="block p-2 text-blue-500 hover:text-blue-950">Manage Members</a>
    </div>
</div>

<?php include 'templates/footer.php'; ?>