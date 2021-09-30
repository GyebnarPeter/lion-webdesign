<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $full_message = "Név: " . $name .
                    "Email: " . $email .
                    "Telefon: " . $phone .
                    "Üzenet: " . $message;

    if(mail('info@lionwebdesign.hu', 'Kérdés érkezett!',$message, "From: " .$email)){
        echo "<script>
                    function response() {
                        window.location.href = '../kapcsolat.html';
                        
                    }
                    response();
                </script>";
    }

}

?>

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
    <meta property="og:image" content="../img/logo-og.png"/>
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/css/style.css">
    <title>Lion Webdesign - Kapcsolat</title>
</head>
<body>
<div class="cursor"></div>

<div class="nav-btn hover-effect">
    <span class="nav-btn__line"></span>
    <span class="nav-btn__line"></span>
    <span class="nav-btn__line"></span>
</div>

<nav class="nav">
    <div class="nav__container container">
        <div class="nav__container-left-column container__left-column">
            <div class="nav__logo hover-effect">
                <a href="/index.html"><img src="../img/logo-white.png" alt="logo"></a>
            </div>
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav__link hover-effect" href="/index.html">Kezdőlap</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link hover-effect" href="/weboldal_keszites.html">Weboldalkészítés</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link hover-effect" href="/webaruhaz_keszites.html">Webáruház készítés</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link hover-effect" href="/kreativ_szovegiras.html">Kreatív szövegírás</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link hover-effect" href="/subpage.html">Nyomdai szolgáltatások</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link hover-effect" href="/referenciak.html">Referenciák</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link hover-effect" href="/blog.html">Blog</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link hover-effect" href="/kapcsolat.html">Kapcsolat</a>
                </li>
            </ul>
        </div>
        <div class="nav__container-right-column container__right-column">
            <img class="levitation" id="nav-lion" src="../img/lion-0.png" alt="shape">
        </div>
    </div>
</nav>

<div id="my-scrollbar">
    <div id="swup" class="transition-fade">

        <header class="header">
            <div class="header__container container">
                <div class="header__container-left-column container__left-column">
                    <div class="header__logo hover-effect">
                        <a href="index.html"><img src="../img/logo-white.png" alt="logo"></a>
                    </div>
                    <div class="header__left-column-content">
                        <div class="header__title hover-effect">
                            <h1>kapcsolat</h1>
                        </div>
                        <div class="header__text hover-effect">
                            <p>Kérdésed van?<br>
                                Kérj árajánlatot weboldal készítésre, webáruház készítésre, kreatív szövegírásra, vagy nyomdai szolgáltatásunkra!</p>
                        </div>
                        <a href="/referenciak.html" class="header__button button hover-effect">
                            <div class="button__line"></div>
                            <div class="button__container">
                                <div class="button__text">referenciák</div>
                                <div class="button__text">referenciák</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="header__container-right-column container__right-column">
                    <div class="header__decor-text decor-text">
                        <p>lion</p>
                    </div>
                    <div class="header__decor-circle">
                        <img src="../img/webdesign.png" alt="circle">
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>

<div class="transition-wipe overlay"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
<script src="js/script.js"></script>
<script src="index.js"></script>
</body>
</html>
