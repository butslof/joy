<a href="<?= $args['link']; ?>" title="<?= strip_tags($args['title']); ?>">
    <div class="card-component-one">
        <img src="<?= $args['image']; ?>" alt="<?= strip_tags($args['alt_image']); ?>" title="<?= strip_tags($args['title_image']); ?>">
        <div class="bg"></div>
        <div class="content">
            <h2 class="title">
                <?= $args['title']; ?>
            </h2>
            <p>
                <?= $args['text']; ?>
            </p>
            <span  class="link">
                <?= $args['text-button']; ?>
            </span>
        </div>
    </div>
</a>