<div class="input <?php if (!is_null($error) && isset($error[$name])): ?> error<?php endif; ?>">
<label 
    for="<?= str::slug($name); ?>"
>
<?= $label ?>
</label>
<input 
    id="<?= str::slug($name); ?>"
    type="<?= $type ?>"
    name="<?= $name ?>"
    <?php if(!is_null($old) && isset($old[$name])): ?>
    value="<?= $old[$name] ?>"
    <?php endif; ?>
    <?php if(true == $req): ?>
    aria-describedby="message-<?= str::slug($name); ?>"
    required
    <?php endif ; ?>
>
<?php if(true == $req): ?>
<div id="message-<?= str::slug($name); ?>" class="required-message form-message">required</div>
<?php endif ; ?>
<?php snippet('ui/formerror', ['name' => $name, 'alert' => $error]) ?>
</div>