<?php get_header(); ?>
<main class="snap-container">
    <header id="header" class="header active-submenu-open">
        <div class="container">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-advoiced.png" alt="" class="header__logo" width="90px">
                    </div>
                    <div class="col-9">
                        <nav class="header__nav d-flex justify-content-end">
                            <?php html5blank_nav(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section__rel">
        <div class="section__rel__content">
            <video class="section__rel__content__video" width="320" height="240" autoplay muted>
                <source src="<?php echo get_stylesheet_directory_uri() ?>/assets/video/reel.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <section style="" class="bannerHero container_start">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        
                    </div>
                    <div class="col-10 text-center">
                        <h1 class="title__great color-white pb-4 mb-4">Nosotros</h1>
                        <div class="pt-2  pb-2 bannerHero__title wow animate__animated animate__backInLeft animate__delay-1s">We are your <strong>marketing partners</strong> marketing partners with the soul of entrepreneurs. We are on your side, ready to bring you success in digital marketing with sharp, creative strategies and a passion for creating amazing work that makes you stand out.</div> 
                        <div class="pt-4 mt-4 bannerHero__button wow animate__animated animate__backInLeft animate__delay-1s">
                            <a href="">SERVICIOS</a>
                        </div>
                    </div>
                    <div class="col-1">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include( get_template_directory() . '/section/service-card.php' );?>
    <?php include( get_template_directory() . '/section/success.php' );?>
    <?php include( get_template_directory() . '/section/partners.php' );?>
    <?php include( get_template_directory() . '/section/team.php' );?>
    <?php include( get_template_directory() . '/section/contact.php' );?>
</main>
<div class="header__transparent">
    
</div>
<?php get_footer(); ?>

