<?php if ( isset( $_GET['message'] ) && ! empty( $_GET['message'] ) ) : ?>
<div class="mdl-cell mdl-cell--12-col predic-mvc-messages">
    <h6>You have a message:</h6>
    <h5><?php echo strip_tags($_GET['message']); ?></h5>
</div>
<div class="predic-mvc-clearfix"></div>
<?php endif;
