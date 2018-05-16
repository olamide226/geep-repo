<?php
/* @var $this CasetwoController */
/* @var $data Casetwo */
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
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('agent_name')); ?>:</b>
	<?php echo CHtml::encode($data->agent_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agent_phn_number')); ?>:</b>
	<?php echo CHtml::encode($data->agent_phn_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('association')); ?>:</b>
	<?php echo CHtml::encode($data->association); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complaints')); ?>:</b>
	<?php echo CHtml::encode($data->complaints); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('response')); ?>:</b>
	<?php echo CHtml::encode($data->response); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
    <?php echo CHtml::encode($data->response); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('source')); ?>:</b>
    <?php echo CHtml::encode($data->source); ?>
    <br />



</div>