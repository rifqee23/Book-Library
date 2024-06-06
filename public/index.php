<?php
session_start();
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./style.css" rel="stylesheet">
</head>

<body>

  <header class="max-w-[102rem] top-10 left-1/2 transform -translate-x-1/2 fixed w-full z-50 mx-auto">
    <nav class="relative flex items-center justify-between">
      <div class="flex items-center gap-1">
        <img class="w-[50px] h-[50px]" src="asset/lidia.png" alt="">
        <h1 class="text-3xl font-bold "> Lidia</h1>
      </div>
      <div class="absolute top-3 left-96">
        <ul class="flex gap-10">
          <li>Feature</li>
          <li>Service</li>
          <li>Review</li>
          <li>Location</li>
        </ul>
      </div>
      <button id="loginBtn" class="px-12 py-2 text-lg font-medium bg-white rounded-xl">Login</button>
    </nav>
  </header>

  <section class="flex min-h-screen">
    <div class="flex flex-col items-center w-1/2 pt-40">
      <h1 class="w-full max-w-xl leading-normal text-7xl">
        Search & review
        your fav book effortlessly
      </h1>
      <p class="w-full max-w-xl mt-5 leading-10">
        Embark on a literary journey like never before with our revolutionary
        library application! Introducing a seamless experience
        that transcends traditional boundaries, where you
        can effortlessly search your favorite books.✨
      </p>

      <div class="w-full max-w-xl mt-10">
        <button class="px-8 py-3 font-bold text-white bg-blue-500 rounded-xl">Get Started</button>
      </div>
    </div>
    <div class="relative w-1/2">
      <div class="absolute top-0 z-20 w-full h-full bg-blue-600 clip-path-custom-trapezoid"></div>
      <div class="absolute top-0 z-10 w-full h-full bg-blue-500 clip-path-custom-polygon"></div>
    </div>
  </section>

  <script>
    const loginBtn = document.getElementById("loginBtn");
    loginBtn.addEventListener("click", function() {
      window.location.href = "login.php";
    })
  </script>
</body>

</html>
<!-- clip-path-custom-polygon -->