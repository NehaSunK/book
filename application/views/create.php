<div class="column">
    <h2 class="title">Create Book</h2>
    <div class="notification is-danger">
    <?php echo validation_errors(); ?>
    </div>
    <form action="<?= site_url('store') ?>" method="POST">
        <div class="field">
            <label class="label">Book Name</label>
            <div class="control">
                <input id="name" name="name" class="input" type="text" value="<?php echo set_value('name'); ?>" placeholder="Type the book name">
            </div>
        </div>
        <div class="field">
            <label class="label">Book Introduction</label>
            <div class="control">
                <input id="introduction" name="introduction" class="input" type="text" value="<?php echo set_value('introduction'); ?>" placeholder="Type the book introduction">
            </div>
        </div>
        <div class="field">
            <label class="label">Selling Price</label>
            <div class="control">
                <input id="selling_price" name="selling_price" class="input" type="number" value="<?php echo set_value('selling_price'); ?>"placeholder="Type the selling_price">
            </div>
        </div>
        <div class="field">
            <label class="label">Cover Image</label>
            <div class="control">
                <input id="cover_image" name="cover_image" class="input" type="file" value="<?php echo set_value('cover_image'); ?>">
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <input type="submit" class="button is-link" name="save" value="Save Data"/>
            </div>
        </div>
    </form>
</div>