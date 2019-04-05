<label 
    class="radio" 
    for="<?= str::slug($title); ?>"
>
<input 
    type="radio" 
    name="<?= $name ?>" 
    id="<?= str::slug($title); ?>" 
    value="<?= $title ?>"
/>
<span><?= $title ?></span>
</label>
