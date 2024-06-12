<!-- templates/header.php -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-100">
    <nav class="p-4 bg-blue-500">
        <div class="container mx-auto">
            <a href="home.php" class="text-xl text-white">Library Management</a>
            <a href="books.php" class="ml-4 text-white">Books</a>
            <a href="member.php" class="ml-4 text-white">Members</a>
            <a href="transactions.php" class="ml-4 text-white">Transactions</a>
        </div>
    </nav>
    <div class="container mx-auto mt-5">