<?php
include 'inc/init.inc.php';
include 'inc/header.inc.php';
include 'inc/nav.inc.php';
?>
<!-- Banner -->
<section id="banner">
    <div data-aos="zoom-in" data-aos-duration="3000">
        <h1>Développeur<br>intégrateur web</h1>
    </div>
</section>

<main>
    <!-- One -->
    <section id="one">

        <article>
            <img src="<?php echo URL; ?>assets/images/ifocop.jpg" alt="bla bla bla">
            <div class="contentOne">
                <div>
                    <p class="surTitre">juin 2021 - octobre 2021</p>
                    <h2>FORMATION DEVELOPPEUR INTEGRATEUR WEB</h2>
                </div>
                <p class="oneDesc">
                    Formation intensive pour préparer un titre RNCP niveau 6 (bac+3/4). J’ai pu grâce à cette formations me confronter au métier de développeur web. J’ai également développé des projets très formateurs qui m'ont aussi permis de monter en compétences sur JS ainsi que PHP, SQL, WP, HTML, CSS.
                </p>
                <div class="button">
                    <a href="https://www.ifocop.fr/" target="_blank">Aller sur le site</a>
                </div>
            </div>
        </article>

        <article>
            <img src="<?php echo URL; ?>assets/images/doranco.jpg" alt="bla bla bla">
            <div class="contentOne">
                <div>
                    <p class="surTitre">novembre 2019 - avril 2020</p>
                    <h2>FORMATION DEVELOPPEUR WEB FRONT-END</h2>
                </div>
                <p class="oneDesc">
                    Formation intensive durant laquelle j'ai appris à maitriser les fondamentaux du développement web ainsi que des frameworks, notamment Angular avec les API de la nasa (Mars-Weather). J'ai aussi crée une application NodeJS a l'aide d'ExpressJS. J'ai abordé le SEO et l'utilisation de Google Analytics.
                </p>
                <div class="button">
                    <a href="https://www.doranco.fr/" target="_blank">Aller sur le site</a>
                </div>
            </div>
        </article>

    </section>

    <!-- Two -->
    <section id="two">
        <p>
            <a href="<?php echo URL; ?>assets/images/Laurent-CV-2022.pdf" target="_blank"><i class="fa fa-download"></i> Mon CV</a>
        </p>
    </section>

    <!-- Three -->
    <section id="three">
        <p class="surTitre">Voici quelques projets et réalisé durant ma formation à l'IFOCOP</p>
        <h2>Mes Projets</h2>

        <div class="galleryThree">

            <div class="imageGallery">
                <a href="https://movie.laurentlassallette.fr/" target="_blank"><img src="<?php echo URL; ?>assets/images/movie.jpg" alt=""></a>
            </div>

            <div class="imageGallery">
                <a href="https://chambord.laurentlassallette.fr/" target="_blank"><img src="<?php echo URL; ?>assets/images/chambord.jpg" alt=""></a>
            </div>

            <div class="imageGallery">
                <a href="https://eshop.laurentlassallette.fr/" target="_blank"><img src="<?php echo URL; ?>assets/images/eshop.jpg" alt=""></a>
            </div>

            <div class="imageGallery">
                <a href="https://room.laurentlassallette.fr/" target="_blank"><img src="<?php echo URL; ?>assets/images/room.jpg" alt=""></a>
            </div>

            <div class="imageGallery">
                <a href="https://green.laurentlassallette.fr/" target="_blank"><img src="<?php echo URL; ?>assets/images/green.jpg" alt=""></a>
            </div>
            
        </div>
    </section>
</main>
<?php
include 'inc/footer.inc.php';
