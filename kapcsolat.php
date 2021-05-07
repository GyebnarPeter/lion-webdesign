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
                        <h1>contact<br>us</h1>
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

    <main class="contact">
        <div class="contact__container container">
            <div class="contact__container-left-column container__left-column">
                <div class="contact__details hover-effect">
                    <h1><span>Lion </span>Webdesign</h1>
                    <p>info@lionwebdesign.hu</p>
                    <p>06 30 / 123-4567</p>
                    <p>Brüsszeli körút 28 / A</p>
                    <p>Szeged</p>
                    <p>6729</p>
                </div>
                <img class="levitation" src="./img/shape3.png" alt="shape">
            </div>
            <div class="contact__container-right-column container__right-column">
                <h2 class="hover-effect">Contact <span>Us</span></h2>
                <p class="hover-effect">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi esse, possimus dolores qui soluta et deserunt quidem tenetur libero eaque?</p>
                <form action="" method="" class="contact__form">
                    <input type="text" name="name" id="name" placeholder="Name">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                    <input type="text" name="phone" id="phone" placeholder="Phone">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Submit" class="hover-effect">
                </form>
                <div class="contact__social hover-effect">
                    <a href="#">facebook</a>
                    <a href="#">instagram</a>
                </div>
            </div>
        </div>
        <div class="contact__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.984415753076!2d20.148271422023832!3d46.26190536512172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4744871edc1ac69b%3A0xf868651876563a66!2sLion%20Webdesign!5e0!3m2!1shu!2shu!4v1620312255458!5m2!1shu!2shu" width="100%" height="450" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </main>

    <!-- <?php include "./includes/footer.php" ?> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>