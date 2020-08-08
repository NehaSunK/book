<div class="column">
    <h2 class="title">Create Book</h2>
    <div class="notification is-danger">
    <?php echo validation_errors(); ?>
    </div>

<form action="<?= site_url('searchresult')?>" method="POST">
	<div class="field">
        <label class="label">Look for a book by its ID!</label>
        <div class="control">
            <input id='bookid' name='bookid' class="input" type="text" value="<?php echo set_value('bookid'); ?>" placeholder="Type the book ID">
            <input type="submit" class="button is-link" name="search" value="Search Book"/>
        </div>
    </div>
</form>

</div>
