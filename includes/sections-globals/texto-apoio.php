<?php 

    $data = get_field('texto_de_apoio_internas');  
    if($data):
    
?>
    <section id="texto-apoio">
        <div class="container">
            <?php foreach($data as $element): ?>
                <div class="row line-content">
                    <div class="col-12">
                        <h2>
                            <?= $element['titulo']; ?>
                        </h2>
                        <?= $element['texto']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>