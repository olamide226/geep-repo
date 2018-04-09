<?php
/* @var $this KwikcashController */
/* @var $model Kwikcash */

$this->breadcrumbs=array(
	'Kwikcashes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kwikcash', 'url'=>array('index')),
	array('label'=>'Create Kwikcash', 'url'=>array('create')),
	array('label'=>'View Kwikcash', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kwikcash', 'url'=>array('admin')),
);
?>

<h1>Update Kwikcash <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>