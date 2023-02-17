<section class="container__section container_start">
    <div class="container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="swiperSuccess success-slider">
                        <div class="swiper-wrapper">
                        <?php for($i = 0 ; $i <= 2 ; $i++) { ?>
                            <div class="swiper-slide">
                                <div class="success">
                                    <h2 class="success__title title__global">CASOS DE ÉXITOS</h2>
                                    <div class="success__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus soluta molestiae doloribus ut cumque sit adipisci qui maiores, modi quam laborum repellat, magni exercitationem officiis dolores? Quos consequatur similique aliquid!</div>
                                    <img class="success__img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logoscharff.PNG" alt="">
                                    <h4 class="success__subtitle">SCHARFF</h4> 
                                    <p class="success__subparagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat placeat nostrum voluptatibus nam cumque. Autem enim qui voluptatum similique perspiciatis sint harum voluptate a alias quibusdam! Necessitatibus dolorem repellendus sunt.</p>   
                                    <div class="d-flex align-items-center mb-3 mb-md-0 success__gap">
                                        <a href="" class="success__case">LEER CASO</a>
                                        <div class="d-flex align-items-center">
                                            <div class="prev-success"></div>
                                            <div class="d-flex align-items-center">
                                                <?php for($i = 0 ; $i <= 2 ; $i++) { ?>
                                                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/recurso-item.png"  style="width: 15px !important ; height: 15px !important" alt="">
                                                <?php } ?>
                                            </div>
                                            <div class="next-success"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 p-0 successImage  wow animate__animated animate__backInRight animate__delay-1s" style="z-index: 2;">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/item-2.png" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>