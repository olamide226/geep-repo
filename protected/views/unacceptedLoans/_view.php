<?php
/* @var $this UnacceptedLoansController */
/* @var $data UnacceptedLoans */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_name')); ?>:</b>
	<?php echo CHtml::encode($data->customer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_number')); ?>:</b>
	<?php echo CHtml::encode($data->phone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('association')); ?>:</b>
	<?php echo CHtml::encode($data->association); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_offer_was_sent')); ?>:</b>
	<?php echo CHtml::encode($data->date_offer_was_sent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('tenure')); ?>:</b>
    <?php echo CHtml::encode($data->tenure); ?>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_aggregators')); ?>:</b>
	<?php echo CHtml::encode($data->sub_aggregators); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_loan_was_requested')); ?>:</b>
	<?php echo CHtml::encode($data->date_loan_was_requested); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficiaries_institution')); ?>:</b>
	<?php echo CHtml::encode($data->beneficiaries_institution); ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_received')); ?>:</b>
	<?php echo CHtml::encode($data->date_received); ?>
	<br />


</div>