<?php

function slideshow($id,$column,$images,$autoplay,$interval){
?>

    <div class="slideshow" id="<?php echo $id; ?>">
        <div class="slideshow__images slideshow__images--<?php echo $column; ?>">
            <?php foreach( $images as $image ){ ?>
                <div class="slideshow__images__image ">
                    <a href="<?php echo $image['link']; ?>" <?php if( $image['target'] ){ ?>target="<?php echo $image['target']; ?><?php } ?>">
                        <?php if( $image['title'] ){ ?><p><?php echo $image['title']; ?></p><?php } ?>
                        <?php if( $image['src'] ){ ?><img src="<?php echo $image['src']; ?>" /><?php } ?>
                        <?php if( $image['caption'] ){ ?><p><?php echo $image['caption']; ?></p><?php } ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="slideshow__btns">
            <a href="#" class="slideshow__btns__btn slideshow__btns__btn--prev">PREV</a>
            <a href="#" class="slideshow__btns__btn slideshow__btns__btn--next">NEXT</a>
        </div>
    </div>
    <script>
        new Slideshow({
            id       : '<?php echo $id; ?>',
            autoplay : <?php echo $autoplay; ?>,
            interval : <?php echo $interval; ?>,
        });
    </script>
<?php
}
