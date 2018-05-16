<?php
/* @var $this FraudController */
/* @var $model Fraud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fraud-form',
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
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>60, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'customer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cust_phone_number'); ?>
		<?php echo $form->textField($model,'cust_phone_number',array('size'=>11,'maxlength'=>11, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cust_phone_number'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'agent_name'); ?>
		<?php echo $form->textField($model,'agent_name',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'agent_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agent_phn_number'); ?>
		<?php echo $form->textField($model,'agent_phn_number',array('size'=>11,'maxlength'=>11, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'agent_phn_number'); ?>
	</div>

	<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'date'); ?>
		<?php //echo $form->textField($model,'date', ['class' => 'form-control']); ?>
		<?php //echo $form->error($model,'date'); ?>
	</div>
	-->

	<div class="row">
		<?php echo $form->labelEx($model,'association'); ?>
		<?php echo $form->textField($model,'association',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'association'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'complaints'); ?>
		<?php echo $form->textField($model,'complaints',array('size'=>60, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'complaints'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'response'); ?>
		<?php echo $form->textField($model,'response',array('size'=>60,'maxlength'=>300, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'response'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'action'); ?>
		<?php echo $form->textArea($model,'action',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'action'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'payment_medium'); ?>
		<?php echo $form->textField($model,'payment_medium',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'payment_medium'); ?>
	</div>

	<div class="row ">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->