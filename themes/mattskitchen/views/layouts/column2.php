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
                    )); ?>
         <?php if ($_GET['r']=='boi/admin' && (strtolower(Yii::app()->user->id)=='admin' || strtolower(Yii::app()->user->id)=='isaac_fasoyin')): ?>
  
<hr><a class="btn btn-success" id = 'annB'>Enter announcement</a>
<div id="ann" style="display: none;">

    <form method="post" action="index.php?r=boi/admin"><textarea class="form-control" rows="5" name="mytext" id="announcer"></textarea>
    <button id='sub' type="submit" "class="btn btn-success btn-sm">Submit</button>
    </form>
</div>

<?php endif ?>
<?php
$this->endWidget();
                }
                if ($_GET['r']=='boi/view' || $_GET['r']=='enquiry/create' || $_GET['r']=='tradermoni/create' || $_GET['r']=='casetwo/dta' || $_GET['r']=='casetwo/aggregator' || $_GET['r']=='site/base') {
                  $this->beginWidget('zii.widgets.CPortlet', array(
                      'title'=>'Knowledge Base',
                  )); ?>

                  <ul class='operations' id="yw3">
                  <li><button type='button' class='btn btn-success form-control'
                  data-toggle='modal' data-target='#myModal1'>HOW TO REGISTER</button></li>
                  <li><button type='button' class='btn btn-success form-control '
                  data-toggle='modal' data-target='#myModal2'>LOAN RECONCILIATION</button></li>
                  <li><button type='button' class='btn btn-success form-control '
                  data-toggle='modal' data-target='#myModal3'>LOAN OFFER SMS</button></li>
                  <li><button type='button' class='btn btn-success form-control'
                  data-toggle='modal' data-target='#myModal4'>AGGREGATOR AND DTA</button></li>
                  <li><button type='button' class='btn btn-success form-control'
                  data-toggle='modal' data-target='#myModal5'>FRAUD CASE</button></li>
                  <li><button type='button' class='btn btn-success form-control'
                  data-toggle='modal' data-target='#myModal6'>BOI INFORMATION</button></li>
                  <li><button type='button' class='btn btn-success form-control'
                  data-toggle='modal' data-target='#myModal7'>BANKS FOR PAY DIRECT</button></li>
                  <li><button type='button' class='btn btn-success form-control'
                  data-toggle='modal' data-target='#myModal8'>PAYMENTS USING ATM</button></li>
                  <li><button type='button' class='btn btn-success form-control'
                  data-toggle='modal' data-target='#myModal9'>TRADERMONI</button></li>
                </ul>
                <?php
                  // $this->widget('zii.widgets.CMenu', array(
                  //     'items'=>array(
                  //
                  //         array('label' => 'List', 'url' =>'?r=boi/admin'),
                  //         array('label' => 'Create', 'url' => array('create','class'=>'hahaha')),
                  //         // array('label' => 'Update', 'url' => array('update', 'id' => $model->id)),
                  //         // array('label' => 'Delete', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
                  //         array('label' => 'Manage', 'url' => array('admin')),
                  //     ),
                  //     'htmlOptions'=>array('class'=>'operations'),
                  // ));
                  $this->endWidget();

                }
                ?>
<?php include 'modal.php'; ?>


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
