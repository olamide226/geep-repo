<?php $this->beginContent('//layouts/main'); ?>





<div class="row">
    <div class="col-md-3 col-md">
        <div class="">
            <aside id="">
                <?php
                if (!Yii::app()->user->isGuest) {
                    $this->beginWidget('zii.widgets.CPortlet', array(
                        'title'=>'Operations',
                    ));
                    $this->widget('zii.widgets.CMenu', array(
                        'items'=>$this->menu,
                        'htmlOptions'=>array('class'=>'operations'),
                    ));
                    $this->endWidget();
                }
                ?>
            </aside><!-- sidebar -->
        </div>

    </div>


    <div class="col-md-9">
        <div class="">
            <section id="content">
                <?php echo $content; ?>
            </section><!-- content -->
        </div>
    </div>
</div>

<?php $this->endContent(); ?>
