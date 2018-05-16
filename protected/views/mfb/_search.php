<?php
/* @var $this MfbController */
/* @var $model Mfb */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sn'); ?>
		<?php echo $form->textField($model,'sn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certificate_of_incorporation'); ?>
		<?php echo $form->textField($model,'certificate_of_incorporation',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_o_i_comments'); ?>
		<?php echo $form->textField($model,'c_o_i_comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forms_CAC2_CAC7'); ?>
		<?php echo $form->textField($model,'forms_CAC2_CAC7',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cac2_7_comments'); ?>
		<?php echo $form->textField($model,'cac2_7_comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'form_CAC2_1'); ?>
		<?php echo $form->textField($model,'form_CAC2_1',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cac2_1_comments'); ?>
		<?php echo $form->textField($model,'cac2_1_comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cbn_license'); ?>
		<?php echo $form->textField($model,'cbn_license',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cbn_license_comments'); ?>
		<?php echo $form->textField($model,'cbn_license_comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'memart'); ?>
		<?php echo $form->textField($model,'memart',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'memart_comments'); ?>
		<?php echo $form->textField($model,'memart_comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'directors_management_profile'); ?>
		<?php echo $form->textField($model,'directors_management_profile',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'directors_profile_comments'); ?>
		<?php echo $form->textField($model,'directors_profile_comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bvn_details'); ?>
		<?php echo $form->textField($model,'bvn_details',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bvn_details_comments'); ?>
		<?php echo $form->textField($model,'bvn_details_comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_profile'); ?>
		<?php echo $form->textField($model,'company_profile',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_profile_comments'); ?>
		<?php echo $form->textField($model,'company_profile_comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'audit_statements'); ?>
		<?php echo $form->textField($model,'audit_statements',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'audit_statements_comments'); ?>
		<?php echo $form->textField($model,'audit_statements_comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_details'); ?>
		<?php echo $form->textField($model,'contact_details',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'general_comments'); ?>
		<?php echo $form->textField($model,'general_comments',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_date'); ?>
		<?php echo $form->textField($model,'contact_date',array('size'=>20,'maxlength'=>20)); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'contacted_person'); ?>
        <?php echo $form->textField($model,'contacted_person',array('size'=>50,'maxlength'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'means_of_contact'); ?>
        <?php echo $form->textField($model,'means_of_contact',array('size'=>50,'maxlength'=>50)); ?>
    </div>

	<div class="row">
		<?php echo $form->label($model,'response_status'); ?>
		<?php echo $form->textField($model,'response_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->