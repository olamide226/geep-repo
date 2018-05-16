<?php
/* @var $this ConversationsController */
/* @var $model Conversations */

$this->breadcrumbs=array(
	'Conversations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Conversations', 'url'=>array('index')),
	//array('label'=>'Create Conversations', 'url'=>array('create')),
	//array('label'=>'View Conversations', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Conversations', 'url'=>array('admin')),
);
?>

<h1>Update Conversations <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>