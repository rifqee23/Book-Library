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

<body class="bg-gray-100 ">
    <header class="bg-blue-500">
        <nav class="container flex items-center justify-between p-4 mx-auto ">

            <div class="flex items-center ">
                <a href="home.php" class="text-xl text-white">Library Management</a>
                <div class="p-4">
                    <a href="books.php" class="p-4 text-white">Books</a>
                    <a href="member.php" class="p-4 text-white">Members</a>
                    <a href="transactions.php" class="p-4 text-white">Transactions</a>
                </div>
            </div>
            <a href="logout.php" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M9 12h12l-3 -3" />
                    <path d="M18 15l3 -3" />
                </svg></a>


        </nav>
    </header>