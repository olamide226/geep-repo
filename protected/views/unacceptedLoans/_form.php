<?php
/* @var $this UnacceptedLoansController */
/* @var $model UnacceptedLoans */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unaccepted-loans-form',
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
		<?php echo $form->textField($model,'customer_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'customer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'phone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'association'); ?>
		<?php echo $form->textField($model,'association',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'association'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_offer_was_sent'); ?>
		<?php echo $form->textField($model,'date_offer_was_sent',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'date_offer_was_sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_aggregators'); ?>
		<?php echo $form->textField($model,'sub_aggregators',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'sub_aggregators'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_loan_was_requested'); ?>
		<?php echo $form->textField($model,'date_loan_was_requested',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'date_loan_was_requested'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficiaries_institution'); ?>
		<?php echo $form->textField($model,'beneficiaries_institution',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'beneficiaries_institution'); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'date_received'); ?>
<!--		--><?php //echo $form->textField($model,'date_received'); ?>
<!--		--><?php //echo $form->error($model,'date_received'); ?>
<!--	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->