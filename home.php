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
                    <a class="home__button" onclick="openPage('projects')">
                        <p>Projects</p>
                    </a>
                    <p class="home__button-text">Projects I've worked on, such as games, websites, and more</p>
                </div>
                <div class="home__button-section">
                    <a class="home__button" onclick="openPage('portfolio')">
                        <p>Portfolio</p>
                    </a>
                    <p class="home__button-text">All the artwork I've done, sorted from latest to oldest</p>
                </div>
                <div class="home__button-section">
                    <a class="home__button" onclick="openPage('contact')">
                        <p>Contact / Work</p>
                    </a>
                    <p class="home__button-text nobot">Need to contact me, or want some work done? Hit me up!</p>
                </div>
            </div>
            <div class="home__2col__right">
                <div class="home__latest-portfolio">
                    <div class="home__latest-portfolio-header">
                        <p id="latestPortfolioPost">Latest portfolio post</p>
                    </div>
                    <a id="readMoreButton" class="home__lastest-portfolio-readmore home__button">
                        <p id="readMore">Read More</p>
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

<style id="latestPortfolioPostStyle">
    .home__latest-portfolio {
        background-image: url('./bg_temp.png');
    }
</style>