<?php
/* @var $this TicketsController */
/* @var $model Tickets */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tickets-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_name'); ?>
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>60,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_id'); ?>
		<?php echo $form->textField($model,'member_id',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'member_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'phone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_contact_information'); ?>
		<?php echo $form->textArea($model,'other_contact_information',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'other_contact_information'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'issue'); ?>
		<?php echo $form->textArea($model,'issue',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'issue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'advised_course_of_action'); ?>
		<?php echo $form->textArea($model,'advised_course_of_action',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'advised_course_of_action'); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'boi_status'); ?>
<!--		--><?php //echo $form->textField($model,'boi_status',array('size'=>45,'maxlength'=>45)); ?>
<!--		--><?php //echo $form->error($model,'boi_status'); ?>
<!--	</div>-->
<!--    -->

    <div class="row">
        <?php echo $form->labelEx($model,'boi_status'); ?>
        <?php echo $form->dropDownList($model,'boi_status', array(
                "Open"=>"Open",
                "Pending"=>"Pending",
                "Closed"=>"Closed",
            )
            ,array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'boi_status'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'created_by'); ?>
        <?php echo $form->textField($model,'created_by',array('value'=>Yii::app()->user->id, 'readonly' => true)); ?>
        <?php echo $form->error($model,'created_by'); ?>
    </div>


    <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Generate' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->