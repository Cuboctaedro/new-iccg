<div class="textarea <?php if (!is_null($error) && isset($error[$name])): ?> error<?php endif; ?>">
<label 
    for="<?= str::slug($name); ?>" 
><?= $label ?>
</label>
<textarea 
    id="<?= str::slug($name); ?>" 
    name="<?= $name ?>"
    <?php if(true == $req): ?>
    aria-describedby="error-message-<?= str::slug($name); ?>"
    required
    <?php endif ; ?>
>
<?php if(!is_null($old) && $old[$name]): ?><?= $old[$name] ?><?php endif; ?>
</textarea>
<?php if(true == $req): ?>
<div id="message-<?= str::slug($name); ?>" class="required-message form-message">required</div>
<?php endif ; ?>
<?php snippet('ui/formerror', ['name' => $name, 'alert' => $error]) ?>
</div>