<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./main.css">
    <link rel="icon" type="image/svg+xml" href="./gate-logo-white.svg">
    <script rel="preload" src="https://kit.fontawesome.com/91ad005f46.js" crossorigin="anonymous"></script>


    <!-- we need splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.1/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.1/dist/css/splide.min.css">
</head>

<body id="body">
    <div class="background" id="background"></div>
    <?php
    include("home.php");
    include("portfolio.php");
    ?>
    <script src="./main.js"></script>
    <div id="usercard" class="usercard_container usercard_container-hidden">
        <div class="usercard__close" onclick="showUserCard();">
            <i class="fas fa-times"></i>
        </div>
        <img class="usercard_bg" src="https://cdn.discordapp.com/avatars/233170527458426880/c07a332533d46f6813a0749dfe6963da.webp?size=96" alt="{username}'s avatar">
        <div class="usercard">
            <div class="usercard-left">
                <img class="pfpblur" src="https://cdn.discordapp.com/avatars/233170527458426880/c07a332533d46f6813a0749dfe6963da.webp?size=96" alt="{username}'s avatar">
                <img class="pfp" src="https://cdn.discordapp.com/avatars/233170527458426880/c07a332533d46f6813a0749dfe6963da.webp?size=96" alt="{username}'s avatar">
            </div>
            <div class="usercard-right">
                <p>Add me on discord!</p>
                <div class="usercard-name">
                    Hubz<span class="tag">#6283</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>