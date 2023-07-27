<a href="<?= $args['link']; ?>" title="<?= strip_tags($args['title']); ?>">
    <div class="card-norma">
        <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/icon-norma.svg" alt="<?= strip_tags($args['title']); ?>" title="<?= strip_tags($args['title']); ?>">
        <h2 class="title">
            <?= $args['title']; ?>
        </h2>
        <p>
            <?= $args['text']; ?>        
        </p>
        <span  class="link">
            SAIBA MAIS +
        </span>
    </div>
</a>