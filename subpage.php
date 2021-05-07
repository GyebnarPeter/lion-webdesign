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

    <header class="header">
        <div class="header__container container">
            <div class="header__container-left-column container__left-column">
                <div class="header__logo hover-effect">
                    <a href="index.php"><img src="./img/logo-white.png" alt="logo"></a>
                </div>
                <div class="header__left-column-content">
                    <div class="header__title hover-effect">
                        <h1>subpage<br>title</h1>
                    </div>
                    <div class="header__text hover-effect">
                        <p>This ain't our first rodeo.<br>
                        Redneck is a team of tough, experienced, creative and open-minded people, passionate about everything digital.<br>
                        We're developers as fine as a smooth Tennessee whiskey.<br>
                        Except we’re actually into cold hard beer.</p>
                    </div>
                    <a href="project.php" class="header__button button hover-effect">
                        <div class="button__line"></div>
                        <div class="button__container">
                            <div class="button__text">view projects</div>
                            <div class="button__text">view projects</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="header__container-right-column container__right-column">
                <div class="header__decor-text decor-text">
                    <p>sub<br>page</p>
                </div>
                <div class="header__decor-circle">
                    <img src="./img/webdesign.png" alt="circle">
                </div>
            </div>
        </div>
    </header>

    <main class="service-subpage-content">
        <div class="service-subpage-content__container container">
            <div class="service-subpage-content__container-left-column container__left-column"></div>
            <div class="service-subpage-content__container-right-column container__right-column">
                <img class="levitation" src="./img/shape3.png" alt="shape">
            </div>
        </div>
    </main>
    
    <main class="service-subpage-contact">
        <div class="service-subpage-contact__container container">
            <div class="service-subpage-contact__container-left-column container__left-column"></div>
            <div class="service-subpage-contact__container-right-column container__right-column"></div>
        </div>
    </main>

    <?php include "./includes/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>