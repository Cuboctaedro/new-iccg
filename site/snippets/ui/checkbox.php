<label 
    class="checkbox" 
    for="<?= str::slug($title); ?>"
>
<input 
    type="checkbox" 
    name="<?= $name ?>[]" 
    id="<?= str::slug($title); ?>" 
    value="<?= $title ?>"
    <?php if(!is_null($old) && isset($old[$name]) && in_array($title, $old[$name])): ?>
    checked
    <?php endif; ?>
/>
<span><?= $title ?></span>
</label>


