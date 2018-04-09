<?php
/* @var $this EnquiryController */
/* @var $model Enquiry */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_name'); ?>
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cust_phone_number'); ?>
		<?php echo $form->textField($model,'cust_phone_number',array('size'=>45,'maxlength'=>45)); ?>
	</div>
	
	<div class="row">
		<?php //echo $form->label($model,'agent_name'); ?>
		<?php //echo $form->textField($model,'agent_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'agent_phn_number'); ?>
		<?php //echo $form->textField($model,'agent_phn_number',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'association'); ?>
		<?php echo $form->textField($model,'association',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complaints'); ?>
		<?php echo $form->textField($model,'complaints',array('size'=>60,'maxlength'=>300)); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'other_comments'); ?>
        <?php echo $form->textField($model,'other_comments',array('size'=>60,'maxlength'=>300)); ?>
    </div>

	<div class="row">
		<?php echo $form->label($model,'response'); ?>
		<?php echo $form->textField($model,'response',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->