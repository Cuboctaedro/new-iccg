<?php if ($data->image()->isNotEmpty()): ?>
<figure>
    <img src="<?= $data->image()->toFile()->url(); ?>" class="d-block max-w-full max-h-auto"/>
    <figcaption class="fst-italic fs-14 lh-18">
        <?= $data->caption() ?>
    </figcaption>
</figure>
<?php endif; ?>
