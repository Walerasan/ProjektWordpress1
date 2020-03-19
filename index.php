<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <title>Projekt WordPress w Netbeans</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
         <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
          <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/animacje.css">
    </head>
    <body>
        <header>
            <div class="baner">
                <h1 id="napis1">Motywy w Wordpress</h1>
                <h1 id="napis2">Programowanie w HTML 5.0</h1>
                <h1 id="napis3">Programowanie w CSS 3.0</h1>
                <h1 id="napis4">Preprocesor SASS</h1>
                <h1 id="napis5">Zostań Programistą w Samochodówce</h1>
            </div>
            <div class="banertatry">
                <img src="<?php bloginfo('template_directory') ?>/img/mountains.png" alt="tatry" />
            </div>
            <div class="specjalizacje">
                <h1 class="specjalizacja1">Technik informatyk</h1>
                <h1 class="specjalizacja2">Technik programista</h1>
                <h1 class="specjalizacja3">Technik procesów cyfrowych</h1>
                <h1 class="kontaktemail">kontakt: informatyka@pszczyna.edu.pl</h1>
            </div>
        </header>
        <nav class="menu">
            <div class="box">
                <ul class="poziom1">
                   <li><a href="index.php"><img src="<?php bloginfo('template_directory') ?>/img/git.png" alt="logoGitHub" class="logoGitHub"></a></li>
                   <li class="item"><a href="#">Strona główna</a></li>
                   <li class="item"><a href="#">Hobby</a></li>
                   <li class="item"><a href="#">Galeria</a><i class="arrow"></i>
                       <ul class="poziom2">
                           <li class="item"><a href="#">ASG</a></li>
                           <li class="item"><a href="#">TATRY</a></li>
                       </ul>
                   </li>
                   <li class="item"><a href="#">Praca</a><i class="arrow"></i>
                       <ul class="poziom2">
                           <li class="item"><a href="#">Programowanie</a></li>
                           <li class="item"><a href="#">Edukacja</a></li>
                       </ul>
                   </li>
                   <li class="item"><a href="#">Kontakt</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <article class="artykul">
                <header>
                    <h1>Tytuł artykułu <span> Autor: Walerasan</span></h1>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/img/tatry1.jpg">
            </article>
            <article class="artykul">
                <header>
                    <h1>Tytuł artykułu <span> Autor: Walerasan</span></h1>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/img/tatry1.jpg">
            </article>
            <article class="artykul">
                <header>
                    <h1>Tytuł artykułu <span> Autor: Walerasan</span></h1>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/img/tatry1.jpg">
            </article>
        </div>
    </body>
</html>
