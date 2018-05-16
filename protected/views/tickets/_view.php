<?php
/* @var $this TicketsController */
/* @var $data Tickets */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ticket_number')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ticket_number), array('view', 'id'=>$data->ticket_number)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_name')); ?>:</b>
	<?php echo CHtml::encode($data->customer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_id')); ?>:</b>
	<?php echo CHtml::encode($data->member_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_number')); ?>:</b>
	<?php echo CHtml::encode($data->phone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_contact_information')); ?>:</b>
	<?php echo CHtml::encode($data->other_contact_information); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue')); ?>:</b>
	<?php echo CHtml::encode($data->issue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ticket_date')); ?>:</b>
	<?php echo CHtml::encode($data->ticket_date); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('advised_course_of_action')); ?>:</b>
	<?php echo CHtml::encode($data->advised_course_of_action); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('boi_status')); ?>:</b>
	<?php echo CHtml::encode($data->boi_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />



</div>