<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Egyedi webshoppok weboldalak tervezése és készítése, kreatív szövegírás, nyomdai szolgáltatások."/>
    <meta name="keywords" content="webshop, weboldal, honlap készítés, szövegírás, nyomda, Lion Webdesign Szeged"/>
    <meta property="og:title" content="Lion Webdesign"/>
    <meta property="og:description" content="Webshop, weboldal, kreatív szövegírás, nyomda."/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="./img/logo-og.png"/>
    <link rel="shortcut icon" type="image/png" href="./img/favicon.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/css/style.css">
    <title>Lion Webdesign - Project</title>
</head>
<body>
    <div class="cursor"></div>
    <?php include "./includes/nav.php" ?>


    <header class="project-header">
        <div class="project-header__container container">
            <div class="project-header__container-left-column container__left-column">
                <div class="project-header__logo hover-effect">
                    <img src="./img/logo-white.png" alt="logo">
                </div>
                <div class="project-header__left-column-content">
                    <div class="project-header__main-image hover-effect">
                        <img src="./img/project1.webp" alt="project pic">
                        <img src="./img/webdesign.png" alt="decor circle" class="project-header__decor-circle circulation">
                    </div>
                    <div class="project-header__info">
                        <h2>about</h2>
                        <p>Partner: tason.us</p>
                        <h3 class="hover-effect">visit project site</h3>
                    </div>
                </div>
            </div>
            <div class="project-header__container-right-column container__right-column">
                <div class="project-header__decor-text decor-text">
                    <p>lionel</p>
                </div>
            </div>
        </div>
    </header>

    <main class="project-main">
        <div class="project-main__container container">
            <div class="project-main__container-left-column container__left-column">
                <img class="hover-effect" src="./img/project2.webp" alt="project image">
                <img class="hover-effect" src="./img/project3.webp" alt="project image">
            </div>
            <div class="project-main__container-right-column container__right-column">
                <img class="hover-effect" src="./img/project4.webp" alt="project image">
                <a href="#" class="services__button button hover-effect">
                    <div class="button__line"></div>
                    <div class="button__container">
                        <div class="button__text">next projects</div>
                        <div class="button__text">next projects</div>
                    </div>
                </a>
            </div>
        </div>
    </main>
    

    <?php include "./includes/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>