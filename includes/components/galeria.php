<?php $data = get_field('galeria_componente');?>
<?php if($data): ?>
    <div id="main-slider" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php foreach($data as $galery): ?>
                    <li class="splide__slide">
                        <img src="<?= $galery['url']; ?>" alt="<?= $galery['alt']; ?>" title="<?= $galery['title']; ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div id="thumbnail-slider" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php foreach($data as $galery): ?>
                    <li class="splide__slide">
                        <img src="<?= $galery['url']; ?>" alt="<?= $galery['alt']; ?>" title="<?= $galery['title']; ?>" class="no-lazy">
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            var main = new Splide( '#main-slider', {
                type      : 'fade',
                rewind    : true,
                pagination: false,
                arrows    : false,
            } );

            var thumbnails = new Splide( '#thumbnail-slider', {
                fixedWidth  : 127,
                fixedHeight : 127,
                gap         : 10,
                rewind      : true,
                pagination  : false,
                cover       : true,
                isNavigation: true,
                arrows    : false,
                breakpoints : {
                1023: {
                    fixedWidth : 67,
                    fixedHeight: 66,
                },
                },
            } );

            main.sync( thumbnails );
            main.mount();
            thumbnails.mount();
        } );
    </script>
<?php endif; ?>
