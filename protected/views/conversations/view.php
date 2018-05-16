<?php
/* @var $this ConversationsController */
/* @var $model Conversations */

$this->breadcrumbs=array(
	'Conversations'=>array('index'),
	$model->member_id,
);

$this->menu=array(
	//array('label'=>'List Conversations', 'url'=>array('index')),
	//array('label'=>'Create Conversations', 'url'=>array('create')),
	//array('label'=>'Update Conversations', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Conversations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Conversations', 'url'=>array('admin')),
);
?>

<h1>View Conversations #<?php echo $model->member_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'boi_id',
		'comment',
		'other_comments',
		'comment_by',
		'date',
		'created_on',
		'phone_number',
		'amount',
		'source',
		'categories',
		'agent_name',
		'date_paid',
		'member_id',
	),
)); ?>
