<!DOCTYPE html>
<html>

<?php include('generic.php'); 
include('database.php'); 
$pagename = "home";


$sql = $mysqli_conection->query("SELECT * FROM posts ORDER BY date DESC LIMIT 1");

while ($mp = $sql->fetch_assoc()) {
    $ea = $mp;
}

?>

<style>
.posts-img{
    background-image: url(<?php echo $ea['img_link']; ?>);
}
</style>

<head>
    <!-- Primary Meta Tags -->
    <title>Hubz - Developer & Designer</title>
    <meta name="title" content="Hubz - Developer & Designer">
    <meta name="description"
        content="I'm a website & game developer, designer, and just generally a cool guy (atleast I think so) - Check out my projects, portfolio, and contact me for work and more!">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hubza.co.uk/">
    <meta property="og:title" content="Hubz - Developer & Designer">
    <meta property="og:description"
        content="I'm a website & game developer, designer, and just generally a cool guy (atleast I think so) - Check out my projects, portfolio, and contact me for work and more!">
    <meta property="og:image" content="https://upload.hubza.co.uk/i/A1-WALLPAPER.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://hubza.co.uk/">
    <meta property="twitter:title" content="Hubz - Developer & Designer">
    <meta property="twitter:description"
        content="I'm a website & game developer, designer, and just generally a cool guy (atleast I think so) - Check out my projects, portfolio, and contact me for work and more!">
    <meta property="twitter:image" content="https://upload.hubza.co.uk/i/A1-WALLPAPER.png">
    <title>Hubz</title>
    <?php genericmeta(); ?>
    <link rel="stylesheet" href="<?php echo $pagename; ?>.css" />
    <?php css(); ?>
    <?php font(); ?>
    <?php fa(); ?>
</head>

<body>
    <div class="page-cont">
        <?php navbar($pagename); ?>
        <div class="maincontent">
            <div class="mc-left">
                <div class="mc-link">
                    <a class="mc-link-anchor" href="projects">
                        <div class="mc-link-main">
                            <p class="mclm-top">Projects</p>
                        </div>
                    </a>
                    <div class="mc-link-desc">
                        <p class="mcld-text">Projects I've worked on, such as games, websites, and more
                        <p>
                    </div>
                </div>
                <div class="mc-link">
                    <a class="mc-link-anchor" href="portfolio">
                        <div class="mc-link-main">
                            <p class="mclm-top">Portfolio</p>
                        </div>
                    </a>
                    <div class="mc-link-desc">
                        <p class="mcld-text">All the artwork I've done, sorted from latest to oldest
                        <p>
                    </div>
                </div>
                <div class="mc-link">
                    <a class="mc-link-anchor" href="contact">
                        <div class="mc-link-main">
                            <p class="mclm-top">Contact / Work</p>
                        </div>
                    </a>
                    <div class="mc-link-desc mcld-last">
                        <p class="mcld-text">Need to contact me, or want some work done? Hit me up!
                        <p>
                    </div>
                </div>
            </div>

            <div class="mc-right">
                <div class="posts-header">
                    Latest Portfolio Post
                </div>
                <div class="posts-img">
                    <div class="posts-name">
                    <?php echo $ea['name']; ?>
                    </div>
                    <div class="posts-viewmore">
                        View More
                    </div>
                </div>
            </div>
        </div>
        <?php footer(); ?>
    </div>
</body>

</html>