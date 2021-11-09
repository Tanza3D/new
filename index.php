<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./main.css">
    <link rel="icon" type="image/svg+xml" href="./gate-logo-white.svg">
    <script rel="preload" src="https://kit.fontawesome.com/91ad005f46.js" crossorigin="anonymous"></script>

    <style>
        .home__latest-portfolio {
            background-image: url('./bg_temp.png');
        }
    </style>
</head>

<body id="body">
    <div class="background" id="background"></div>
    <div class="page" id="home">
        <div class="page_content">
            <div class="home__header">
                <img src="./gate-logo-white.svg" alt="HUBZ" class="home__logo">
                <h1>Hey, I'm Hubz!</h1>
                <p>I develop and design games, apps, and websites, produce music, create 3d art, and more!</p>
            </div>
            <div class="home__2col">
                <div class="home__2col__left">
                    <div class="home__button-section">
                        <a class="home__button">
                            <p>Projects</p>
                        </a>
                        <p class="home__button-text">Projects I've worked on, such as games, websites, and more</p>
                    </div>
                    <div class="home__button-section">
                        <a class="home__button">
                            <p>Portfolio</p>
                        </a>
                        <p class="home__button-text">All the artwork I've done, sorted from latest to oldest</p>
                    </div>
                    <div class="home__button-section">
                        <a class="home__button">
                            <p>Contact / Work</p>
                        </a>
                        <p class="home__button-text nobot">Need to contact me, or want some work done? Hit me up!</p>
                    </div>
                </div>
                <div class="home__2col__right">
                    <div class="home__latest-portfolio">
                        <div class="home__latest-portfolio-header">
                            <p>Latest portfolio post</p>
                        </div>
                        <a class="home__lastest-portfolio-readmore home__button">
                            <p>Read More</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer__left">
                    <p>&copy; <?php echo date("Y"); ?> Hubz</p>
                </div>
                <div class="footer__right">
                    <!-- social links using font awesome twitter -->
                    <a href="https://twitter.com/hubziii" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/hubzdesign/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/hubzii" target="_blank"><i class="fab fa-youtube"></i></a>
                    <!-- email and discord -->
                    <a href="mailto:hubz@hubza.co.uk" target="_blank"><i class="fas fa-envelope"></i></a>
                    <a onclick="showUserCard();"><i class="fab fa-discord"></i></a>
                </div>
            </div>
        </div>
    </div>
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