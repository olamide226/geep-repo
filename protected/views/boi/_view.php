<?php
/* @var $this Boi2Controller */
/* @var $data Boi2 */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('member_id')); ?>:</b>
    <?php echo CHtml::encode($data->member_id); ?>
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





    <b><?php echo CHtml::encode($data->getAttributeLabel('member_id')); ?>:</b>
    <?php echo CHtml::encode($data->member_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
    <?php echo CHtml::encode($data->state); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
    <?php echo CHtml::encode($data->amount); ?>
    <br />

    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tenure')); ?>:</b>
	<?php echo CHtml::encode($data->tenure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mou_status')); ?>:</b>
	<?php echo CHtml::encode($data->mou_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount_due')); ?>:</b>
	<?php echo CHtml::encode($data->amount_due); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount_re_paid')); ?>:</b>
	<?php echo CHtml::encode($data->amount_re_paid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount_in_default')); ?>:</b>
	<?php echo CHtml::encode($data->amount_in_default); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_aggregator')); ?>:</b>
	<?php echo CHtml::encode($data->sub_aggregator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aggregator')); ?>:</b>
	<?php echo CHtml::encode($data->aggregator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficiary_institution')); ?>:</b>
	<?php echo CHtml::encode($data->beneficiary_institution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nuban')); ?>:</b>
	<?php echo CHtml::encode($data->nuban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_requested')); ?>:</b>
	<?php echo CHtml::encode($data->date_requested); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reason_for_rejection')); ?>:</b>
	<?php echo CHtml::encode($data->reason_for_rejection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_due_date')); ?>:</b>
	<?php echo CHtml::encode($data->first_due_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_change_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_change_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_icu_confirmation_date')); ?>:</b>
	<?php echo CHtml::encode($data->pending_icu_confirmation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_customer_confirmation_date')); ?>:</b>
	<?php echo CHtml::encode($data->pending_customer_confirmation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_f_ire_confirmation_date')); ?>:</b>
	<?php echo CHtml::encode($data->pending_f_ire_confirmation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_approval_date')); ?>:</b>
	<?php echo CHtml::encode($data->pending_approval_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('due_for_disbursement_date')); ?>:</b>
	<?php echo CHtml::encode($data->due_for_disbursement_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loan_disbursed_successfully_date')); ?>:</b>
	<?php echo CHtml::encode($data->loan_disbursed_successfully_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_declined_date')); ?>:</b>
	<?php echo CHtml::encode($data->offer_declined_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('risk_request_denied_date')); ?>:</b>
	<?php echo CHtml::encode($data->risk_request_denied_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_denied_date')); ?>:</b>
	<?php echo CHtml::encode($data->request_denied_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('not_qualified_date')); ?>:</b>
	<?php echo CHtml::encode($data->not_qualified_date); ?>
	<br />

	*/ ?>

</div>