<?php
/* @var $this KwikcashController */
/* @var $data Kwikcash */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_name')); ?>:</b>
	<?php echo CHtml::encode($data->customer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cust_phone_number')); ?>:</b>
	<?php echo CHtml::encode($data->cust_phone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complaints')); ?>:</b>
	<?php echo CHtml::encode($data->complaints); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('response')); ?>:</b>
	<?php echo CHtml::encode($data->response); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('action')); ?>:</b>
	<?php echo CHtml::encode($data->action); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	*/ ?>

</div>