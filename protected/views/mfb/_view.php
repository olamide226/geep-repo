<?php
/* @var $this MfbController */
/* @var $data Mfb */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sn')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sn), array('view', 'id'=>$data->sn)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />



    <b><?php echo CHtml::encode($data->getAttributeLabel('means_of_contact')); ?>:</b>
    <?php echo CHtml::encode($data->means_of_contact); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('response_status')); ?>:</b>
    <?php echo CHtml::encode($data->response_status); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('contact_details')); ?>:</b>
    <?php echo CHtml::encode($data->contact_details); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('general_comments')); ?>:</b>
    <?php echo CHtml::encode($data->general_comments); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
    <?php echo CHtml::encode($data->created_by); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('contact_date')); ?>:</b>
    <?php echo CHtml::encode($data->contact_date); ?>
    <br />

    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cac2_7_comments')); ?>:</b>
	<?php echo CHtml::encode($data->cac2_7_comments); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('certificate_of_incorporation')); ?>:</b>
	<?php echo CHtml::encode($data->certificate_of_incorporation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_o_i_comments')); ?>:</b>
	<?php echo CHtml::encode($data->c_o_i_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forms_CAC2_CAC7')); ?>:</b>
	<?php echo CHtml::encode($data->forms_CAC2_CAC7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_CAC2_1')); ?>:</b>
	<?php echo CHtml::encode($data->form_CAC2_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cac2_1_comments')); ?>:</b>
	<?php echo CHtml::encode($data->cac2_1_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cbn_license')); ?>:</b>
	<?php echo CHtml::encode($data->cbn_license); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cbn_license_comments')); ?>:</b>
	<?php echo CHtml::encode($data->cbn_license_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memart')); ?>:</b>
	<?php echo CHtml::encode($data->memart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memart_comments')); ?>:</b>
	<?php echo CHtml::encode($data->memart_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('directors_management_profile')); ?>:</b>
	<?php echo CHtml::encode($data->directors_management_profile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('directors_profile_comments')); ?>:</b>
	<?php echo CHtml::encode($data->directors_profile_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bvn_details')); ?>:</b>
	<?php echo CHtml::encode($data->bvn_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bvn_details_comments')); ?>:</b>
	<?php echo CHtml::encode($data->bvn_details_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_profile')); ?>:</b>
	<?php echo CHtml::encode($data->company_profile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_profile_comments')); ?>:</b>
	<?php echo CHtml::encode($data->company_profile_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('audit_statements')); ?>:</b>
	<?php echo CHtml::encode($data->audit_statements); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('audit_statements_comments')); ?>:</b>
	<?php echo CHtml::encode($data->audit_statements_comments); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('date_received')); ?>:</b>
	<?php echo CHtml::encode($data->date_received); ?>
	<br />

	*/ ?>

</div>