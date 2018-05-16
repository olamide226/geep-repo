<?php
/* @var $this FraudController */
/* @var $model Fraud */

$this->breadcrumbs=array(
	'Frauds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Fraud', 'url'=>array('index')),
	array('label'=>'Create Fraud', 'url'=>array('create')),
	array('label'=>'Update Fraud', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Fraud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fraud', 'url'=>array('admin')),
);
?>

<h1>View Fraud #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customer_name',
		'cust_phone_number',
		'date',
		'association',
		'complaints',
		'response',
		'created_by',
		'action',
		'agent_name',
		'agent_phn_number',
		'payment_medium',
	),
)); ?>
