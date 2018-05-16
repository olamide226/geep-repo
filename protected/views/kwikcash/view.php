<?php
/* @var $this KwikcashController */
/* @var $model Kwikcash */

$this->breadcrumbs=array(
	'Kwikcashes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kwikcash', 'url'=>array('index')),
	array('label'=>'Create Kwikcash', 'url'=>array('create')),
	array('label'=>'Update Kwikcash', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kwikcash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kwikcash', 'url'=>array('admin')),
);
?>

<h1>View Kwikcash #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customer_name',
		'cust_phone_number',
		'complaints',
		'response',
		'action',
		'created_by',
		'date_created',
	),
)); ?>
