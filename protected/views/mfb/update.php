<?php
/* @var $this MfbController */
/* @var $model Mfb */

$this->breadcrumbs=array(
	'Mfbs'=>array('index'),
	$model->name=>array('view','id'=>$model->sn),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mfb', 'url'=>array('index')),
	//array('label'=>'Create Mfb', 'url'=>array('create')),
	array('label'=>'View Mfb', 'url'=>array('view', 'id'=>$model->sn)),
	array('label'=>'Manage Mfb', 'url'=>array('admin')),
);
?>

<h1>Update <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>