<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>
<section id="cd-timeline" class="cd-container">
    <?php
                
                foreach ($data as $ada) {
          ?>
        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-picture">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/cd-icon-location.svg" alt="Picture">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h2><?php echo $ada['title'];?></h2>
                 <em><?php echo Yii::$app->formatter->asDate($ada['tgl'], 'long');?></em>
                <p><?php echo $ada['item'];?></p>
                
                <span class="cd-date"><?php echo Yii::$app->formatter->asDate($ada['tgl'], 'long');?></span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->
<?php
}
?>
</section>