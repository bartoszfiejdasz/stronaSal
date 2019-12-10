<?php get_header(); ?>
<h1>frontpage.php - Strona główna</h1>
<header>
    <a href="#">Logo</a>
    <a href="#">Zaloguj się</a>
</header>
<nav>
    <h2>Linki</h2>
    <ul>
        <li><a href="#">Librus</a></li>
        <li><a href="#">MOL</a></li>
        <li><a href="#">Cisco</a></li>
        <li><a href="#">ECDL</a></li>
        <li><a href="#">Microsoft</a></li>
        <li><a href="#">Office</a></li>
    </ul>
</nav>

<nav>
    <h2>Menu Główne</h2>
    <ul>
        <li><a href="#">O szkole</a></li>
        <li><a href="#">Dla Uczniów</a></li>
        <li><a href="#">Życie szkoły</a></li>
        <li><a href="#">Nauka</a></li>
        <li><a href="#">Osiągnięcia</a></li>
        <li><a href="#">Rekrutacja</a></li>
    </ul>
</nav>

<section>
    <h2>Slider</h2>
</section>

<section>
    <h2>Ogłoszenia</h2>

    <?php

$aktualnosci = new WP_Query(
	array(
		'cat' => '2'
	)

);
while($aktualnosci->have_posts()){
	$aktualnosci->the_post();
?>

    <h2><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h2>
    
    <span><?php the_author();?></span>
    <span><?php the_category();?></span>

    <?php
}
wp_reset_postdata();

?>
</section>

<section>
    <h2>Aktualności</h2>

    <?php

$aktualnosci = new WP_Query(
	array(
		'cat' => '3'
	)

);
while($aktualnosci->have_posts()){
	$aktualnosci->the_post();
?>

    <h2><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h2>
    <span><?php the_author();?></span>
    <span><?php the_category();?></span>
    


    <?php
}
wp_reset_postdata();

?>


</section>
<section>
    <h2>Rekrutacja 2019 - liceum 4 letnie</h2>
    <span>Liceum 4 letnie-dla absolwentów</span>
    <nav>
        <h3>klasy</h3>
        <ul>
            <li><a href="#">
                    <h4>Klasa A - Humanistyczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa A - Humanistyczna</h4>
                </a></li>
        </ul>

    </nav>
    <nav>
        <h3>Linki</h3>
        <ul>
            <li><a href="#">Oferta eukacyjna</a></li>
            <li><a href="#">Proponowane klasy pierwsze</a></li>
        </ul>
    </nav>
</section>
<section>
    <h2>Rekrutacja 2019 - liceum 3 letnie</h2>
    <span>Liceum 4 letnie-dla absolwentów</span>
    <nav>
        <h3>klasy</h3>
        <ul>
            <li><a href="#">
                    <h4>Klasa A - Humanistyczna</h4>
                </a></li>
            <li><a href="#">
                    <h4>Klasa A - Humanistyczna</h4>
                </a></li>
        </ul>

    </nav>
    <nav>
        <h3>Linki</h3>
        <ul>
            <li><a href="#">Oferta eukacyjna</a></li>
            <li><a href="#">Proponowane klasy pierwsze</a></li>
        </ul>
    </nav>
</section>
<nav>
    <h2>Współpracujemy</h2>
    <ul>
        <li><a href="#">Adobe</a></li>
        <li><a href="#">AISEC</a></li>
        <li><a href="#">British Council</a></li>
        <li><a href="#">CISCO</a></li>
        <li><a href="#">Microsoft</a></li>
        <li><a href="#">Jet Brains</a></li>
        <li><a href="#">Salezjański wolontrait misyjny</a></li>
    </ul>
</nav>

<section>
    <h2>Mapa dojazdu</h2>
</section>
<section>
    <h2>Kontakt</h2>
    <nav>
        <h3>Publiczne Salezjańskie Liceum Ogólnokształcące w Krakowie</h3>
    </nav>
    <nav>
        <h3>Telefon</h3>
    </nav>
    <nav>
        <h3>Fax</h3>
    </nav>
    <nav>
        <h3>Mail</h3>
    </nav>
</section>
<footer>
    <nav>
        <h2>Salezjanie</h2>
        <ul>
            <li><a href="#">Wspólnota pw. Błogosławionego Augusta Czartoryskiego</a></li>
            <li><a href="#">Inspektoria Krakowska</a></li>
            <li><a href="#">Wyższe Seminarium Duchowne Towarzystwa Salezjańskiego</a></li>
            <li><a href="#">Salezjanie na świecie</a></li>
        </ul>
    </nav>
    <nav>
        <h2>Dla uczniów</h2>
        <ul>
            <li><a href="#">Wspólnota pw. Błogosławionego Augusta Czartoryskiego</a></li>
            <li><a href="#">Inspektoria Krakowska</a></li>
            <li><a href="#">Wyższe Seminarium Duchowne Towarzystwa Salezjańskiego</a></li>
            <li><a href="#">Salezjanie na świecie</a></li>
        </ul>
    </nav>
    <nav>
        <h2>Dla kandydatów</h2>
        <ul>
            <li><a href="#">Wspólnota pw. Błogosławionego Augusta Czartoryskiego</a></li>
            <li><a href="#">Inspektoria Krakowska</a></li>
            <li><a href="#">Wyższe Seminarium Duchowne Towarzystwa Salezjańskiego</a></li>
            <li><a href="#">Salezjanie na świecie</a></li>
        </ul>
    </nav>
    <nav>
        <h2>Inne</h2>
        <ul>
            <li><a href="#">Wspólnota pw. Błogosławionego Augusta Czartoryskiego</a></li>
            <li><a href="#">Inspektoria Krakowska</a></li>
            <li><a href="#">Wyższe Seminarium Duchowne Towarzystwa Salezjańskiego</a></li>
            <li><a href="#">Salezjanie na świecie</a></li>
        </ul>
    </nav>
</footer>

<?php get_footer(); ?>